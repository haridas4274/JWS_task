<?php include('header.php') ?>

<style>
	#search-form{
		margin: auto;
		display: flex;
		width: 50%;
		justify-content: space-between;
		align-items: center;
	}
</style>
<!-- <div id="overlay" style="display: none;">
                <div id="overlay-content1" style="position: absolute; left: 0px; top: 0px;">
                    <div class="logo-img">
                        <img src="https://bluebus.com/images/bus-ani.gif">
                    </div>
                </div>
            </div> -->


<!--banner-->
<div id="welcome_image_div" style="background-image:url('images/slider/banner_1631768685.jpeg')">
    <div class="banner-content">
        <h1 class="se1">Stop Looking, Start Booking</h1>
        <h2 class="se2">Your destination partner! Connecting people &amp; places.</h2>
        <div id="homeSearchWhole">
			
		<form action="search.php" id="search-form" method="POST">
			
			<div class="orgin">
				<select name="orgin" id="" class="form-control">
				<?php 
			foreach ($getCities as $val){
				
				unset($getCities[0]);
				?>
				<script>
					document.cookie=<?print_r($val)?>;
				</script>
					<option value="<?=$val[0]?>" data-val1="<?=$val[2]?>" data-val2="<?=$val[3]?>"><?=$val[1]?></option>
			<?php } ?>
				</select>
			</div>
			<div class="distination">
				<select name="destination" id="" class="form-control">
					<?php 
				foreach ($getCities as $val){ 
					unset($getCities[1]);
					?>
						<option value="<?=$val[0]?>" data-val1="<?=$val[2]?>" data-val2="<?=$val[3]?>"><?=$val[1]?></option>
				<?php } ?>
					</select>
			</div>
			<div class="date">
				<input type="date" name="date_pick" class="form-control" id="">
			</div>
			<div class="sum-btn">
				<input type="submit" name="searchbus"  value="Search">
			</div>
		</form>

            <!-- <form name="frm_search" action="search.php" id="booking" method="post">
                <div style="padding-bottom: 10px; margin-left: 15px;width:100%;margin:0 auto;max-width:1000px">
                    <input type="radio" name="triptype" id="oneway" value="1" checked="checked"
                        onclick="showreturn(this.value);"
                        style=" display:none;float: left; margin-right: 10px; " /><span
                        style="  display:none;float: left; margin-right: 10px;color: #fff;">One-Way</span>
                </div>
                <ul class="searchAvail cf">
                    <li class="leavego">
                        <input type="text" autocomplete="off" class="searchPlace" title="Origin" id="originid"
                            name="ter_from" />
                        <label class="db1 db" style="left:15%" for="src">Leaving From</label>
                        <span class="err_msg" id="err" style="font-size:13px; font-weight:bold;color:#ff0505;"></span>
                        <span class="togglebtn"><img src="images/to-arrow.png" alt="to-arrow.png"
                                style="width:25px; height:25px;" /></span>
                    </li>
                    <li class="leavego">
                        <input type="text" autocomplete="off" title="Destination" class="searchPlace" id="destinationid"
                            name="tag" />
                        <label class="db1 db" style="left:15%" for="src">Going To</label>
                        <span class="err_msg" id="err1" style="font-size:13px; font-weight:bold;color:#ff0505;"></span>
                    </li>
                    <li class="leavego">
                        <input id="datepicker" name="datepicker" type="text" class="calendarInput"
                            style="position: relative; vertical-align: top;" />
                        <label class="db1 db" style="left:19%" for="src">Depature Date</label>

                    </li><span class="err_msg" id="err2" style="font-size:13px; font-weight:bold;color:#ff0505;">
                      
                        <li class="buttonContainer">
                            <button type="submit" id="search" name="search" class="searchBtn"
                                onclick="return validate();">Search</button>
                        </li>
                    </span>
                </ul>
            </form> -->
        </div>
    </div>
</div><span class="err_msg" id="err2" style="font-size:13px; font-weight:bold;color:#ff0505;">
    <!-----------------NEW----------------------->
    <!-- container end here -->

    <div class="mob-middle">
        <div class="offer-title">Offers for you</div>

        <a class="offer-link" href="javascript:void(0)">
            <div class="tb">
                <div class="tb-cl">
                    <img alt="Save" src="https://bluebus.com/images/80-80.png">
                </div>
                <div class="tb-cl">
                    <div class="offer-name">Get 20 % off upto Rs. 300 </div>
                    <div class="offer-is">Only offer. Use code HAPPY20</div>
                </div>
            </div>
        </a>
        <a class="offer-link" href="javascript:void(0)">
            <div class="tb">
                <div class="tb-cl">
                    <img alt="Save" src="https://bluebus.com/images/80-80.png" lt="80-80.png">
                </div>
                <div class="tb-cl">
                    <div class="offer-name">Save Flat Rs 200 on bus tickets first 500 users</div>
                    <div class="offer-is">Only offer. Use code LAUNCH</div>
                </div>
            </div>
        </a>

    </div>
    <div class="rest">
        <div id="offer_div">
            <div class="main-body over-vis">
                <div class="w-100" id="gtm_promo_cont">
                    <div class="cf dib promotions-wrap link-blocks gtm-promotions-trigger">
                        <div class="fl dib promotion-image">
                            <img src="images/slider/banner_1631769120.jpeg" alt="cabservice.png" style="width: 500px;">
                        </div>
                    </div>
                </div>
                <div class="w-100" id="gtm_promo_cont">
                </div>
                <div class="container baner_ofr0">
                    <div id="ab" class="row slick-initialized slick-slider slick-dotted"><button
                            class="slick-prev slick-arrow" aria-label="Previous" type="button"
                            style="">Previous</button>
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                style="opacity: 1; width: 4180px; transform: translate3d(-1140px, 0px, 0px);">
                                <div class="col slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true"
                                    tabindex="-1" style="width: 357px;">
                                    <img src="images/slider/banner_1631771139.webp" style="width: 100%;">
                                </div>
                                <div class="col slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true"
                                    tabindex="-1" style="width: 357px;">
                                    <img src="images/slider/banner_1631771158.webp" style="width: 100%;">
                                </div>
                                <div class="col slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true"
                                    tabindex="-1" style="width: 357px;">
                                    <img src="images/slider/banner_1635402710.jpeg" style="width: 100%;">
                                </div>
                                <div class="col slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide00"
                                    aria-describedby="slick-slide-control00" style="width: 357px;">
                                    <img src="images/slider/banner_1631770562.webp" style="width: 100%;">
                                </div>
                                <div class="col slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                    tabindex="0" role="tabpanel" id="slick-slide01"
                                    aria-describedby="slick-slide-control01" style="width: 357px;">
                                    <img src="images/slider/banner_1631771139.webp" style="width: 100%;">
                                </div>
                                <div class="col slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                    tabindex="0" role="tabpanel" id="slick-slide02"
                                    aria-describedby="slick-slide-control02" style="width: 357px;">
                                    <img src="images/slider/banner_1631771158.webp" style="width: 100%;">
                                </div>
                                <div class="col slick-slide" data-slick-index="3" aria-hidden="true" tabindex="-1"
                                    role="tabpanel" id="slick-slide03" aria-describedby="slick-slide-control03"
                                    style="width: 357px;">
                                    <img src="images/slider/banner_1635402710.jpeg" style="width: 100%;">
                                </div>
                                <div class="col slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true"
                                    tabindex="-1" style="width: 357px;">
                                    <img src="images/slider/banner_1631770562.webp" style="width: 100%;">
                                </div>
                                <div class="col slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true"
                                    tabindex="-1" style="width: 357px;">
                                    <img src="images/slider/banner_1631771139.webp" style="width: 100%;">
                                </div>
                                <div class="col slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true"
                                    tabindex="-1" style="width: 357px;">
                                    <img src="images/slider/banner_1631771158.webp" style="width: 100%;">
                                </div>
                                <div class="col slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true"
                                    tabindex="-1" style="width: 357px;">
                                    <img src="images/slider/banner_1635402710.jpeg" style="width: 100%;">
                                </div>
                            </div>
                        </div>



                        <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
                        <ul class="slick-dots" style="" role="tablist">
                            <li class="slick-active" role="presentation"><button type="button" role="tab"
                                    id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2"
                                    tabindex="0" aria-selected="true">1</button></li>
                            <li role="presentation"><button type="button" role="tab" id="slick-slide-control01"
                                    aria-controls="slick-slide01" aria-label="2 of 2" tabindex="-1">2</button></li>
                            <li role="presentation"><button type="button" role="tab" id="slick-slide-control02"
                                    aria-controls="slick-slide02" aria-label="3 of 2" tabindex="-1">3</button></li>
                            <li role="presentation"><button type="button" role="tab" id="slick-slide-control03"
                                    aria-controls="slick-slide03" aria-label="4 of 2" tabindex="-1">4</button></li>
                        </ul>
                    </div>



                </div>





            </div>
        </div>
        <div id="add_on_div">
            <section>
                <div class="main-body">
                    <div class="tac main-header-family rest1 heading-1 main-head-cont animate">
                        <h1 style="margin: 0 0 20px;font-size: 30px;line-height: 26px; font-family: 'Montserrat'; font-weight: 600; color:#000; text-shadow: none;"
                            data-aos="zoom-in" class="aos-init">What Makes Us Unique</h1>
                        <p
                            style="font-size: 15px;line-height: 26px;text-transform: none;font-weight:normal; color:#000; text-shadow: none;">
                            "bluebus is largest online bus ticketing platform,trusted by over 6 millions
                            Indians. With a sale of over 10,00,00,000 Bus tickets via web,mobile,and our bus
                            agents,it stands at the top of the game in bus ticketing. bluebus operates on
                            over 84000 routes and is associated with 2300 reputed bus operators. Try the
                            best bus experience today."</p>
                    </div>
                    <div>
                        <div class="cf sub-wrapper rest1 animate">
                            <div class="fl sub-container rest1 appear-first animate cf pR aos-init"
                                data-aos="fade-down">
                                <div class="rest1 tac imgCont fl w-30 pA rd-img-cont animate">
                                    <img src="images/DealsCreative.png" height="130">
                                </div>
                                <div class="fl w-60 sub-col-2">
                                    <div class="head rest1 animate">
                                        bluebus
                                    </div>
                                    <div class="desc rest1 animate">
                                        Get a little extra! Additional discounts sponsored by your favorite
                                        bus operators exclusively on bluebus
                                    </div>
                                </div>
                            </div>
                            <div class="fr sub-container rest1 appear-second animate cf pR aos-init"
                                data-aos="fade-left">
                                <div class="rest1 tac imgCont fl w-30 pA animate">
                                    <img src="images/multimedia_icon.png" height="160">
                                </div>
                                <div class="fl w-60 sub-col-2">
                                    <div class="head rest1 animate">
                                        RATINGS AND PICTURE REVIEWS
                                    </div>
                                    <div class="desc rest1 animate">
                                        Rely on ratings and actual photos from fellow travellers to choose
                                        your bus!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="cf sub-wrapper rest1 animate">
                            <div class="fl sub-container rest1 appear-first animate cf pR aos-init"
                                data-aos="fade-right">
                                <div class="rest1 tac imgCont fl w-30 pA animate">
                                    <img src="images/rest_stops.png" style="margin-top: 23px;" height="120">
                                </div>
                                <div class="fl w-60 sub-col-2">
                                    <div class="head rest1 animate">
                                        REST STOPS
                                    </div>
                                    <div class="desc rest1 animate">
                                        Get information on rest stops along the way.
                                    </div>
                                </div>
                            </div>
                            <div class="fr sub-container rest1 appear-second animate cf pR aos-init" data-aos="fade-up">
                                <div class="rest1 tac imgCont fl w-30 pA animate">
                                    <img src="images/GPS_tracking_icon.png" height="150">
                                </div>
                                <div class="fl w-60 sub-col-2">
                                    <div class="head rest1 animate">
                                        LIVE TRACKING
                                    </div>
                                    <div class="desc rest1 animate">
                                        Track your bus with our ‘Track My Bus’ feature and know the exact
                                        location in real-time.Stay informed and keep your family informed!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="border-separator">
        </div>
        <section class="banner-bus">
            <div class="">
                <img src="images/bannerbus.jpg">
            </div>
        </section>
        <div class="pR other-plt-outer-wrap aos-init" data-aos="fade-up" data-aos-duration="2000">
            <div id="platforms_div" class="main-body">
                <section class="pR">
                    <div class="cf op-wrapper">
                        <div class="phone rest1 pA phn-cont animate">
                            <img src="images/slider/banner_1632546399.png" height="552">
                        </div>
                        <div class="pA w-50 txt-otherplt">
                            <div class="oph heading-1 main-header-family rest1 animate">
                                Convenience On-the-go. </div>
                            <div class="opd rest1 second-level-heading animate">
                            </div>
                            <div class="desc-OP-new rest1 animate">
                                <p><strong>Exclusive features on mobile include</strong></p>

                                <p><br>
                                    <span style="color:#3498db">bluebus NOW</span> - when you need a bus in
                                    the next couple of hours. Board a bus on its way.
                                </p>

                                <p><br>
                                    <span style="color:#3498db">Boarding Point Navigation</span> - Never
                                    lose your way while travelling to your boarding point!
                                </p>

                                <p><br>
                                    <span style="color:#3498db">Click Booking</span> - Save your favourite
                                    payment options securely on bus, and more.
                                </p>

                                <p><br>
                                    Download the app.</p>
                            </div>
                            <div class="opi rest1 app_icons animate">
                                <a href="https://play.google.com/store/apps/details?id=com.teckzy.rconbus&amp;pli=1"
                                    target="_blank" class="apple icon-iPhone_download">
                                </a>
                                <a href="#" target="_blank" class="google icon-Google_download">
                                </a>
                                <a href="https://apps.apple.com/in/app/bluebus/id6443729545" target="_blank"
                                    class="windows icon-Windows_download ">
                                </a>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
        <div class="border-separator">
        </div>
        <div id="advantage_div">
            <section>
                <div class="aw main-body">
                    <div class="ah heading-1 main-header-family rest1 animate">
                        <div class="dib"><img src="images/promise.png" height="100"></div>
                        <div class="promise-head-main"> We promise to deliver</div>
                    </div>
                    <div class="ad rest1 animate">
                    </div>
                    <div class="cf aa our-promise-blocks" id="advantage">
                        <div class="fl rest1 appear-first aa-25 animate aos-init" data-aos="fade-up"
                            data-aos-duration="1000">
                            <div class="imgCont rest1 animate">
                                <img src="images/maximum_choices.png" height="90">
                            </div>
                            <div class="tilleBlock rest1 animate">
                                MAXIMUM CHOICE
                            </div>
                            <div class="second-level-heading descCont rest1 animate">
                                We give you the widest number of travel options across thousands of routes.
                            </div>
                        </div>
                        <div class="fl rest1 appear-second aa-25 animate aos-init" data-aos="fade-up"
                            data-aos-duration="1600">
                            <div class="imgCont rest1 animate">
                                <img src="images/customer_care.png" height="100">
                            </div>
                            <div class="tilleBlock rest1 animate">
                                SUPERIOR CUSTOMER SERVICE
                            </div>
                            <div class="second-level-heading descCont rest1 animate">
                                We put our experience and relationships to good use and are available to
                                solve your travel issues.
                            </div>
                        </div>
                        <div class="fl rest1 appear-third aa-25 animate aos-init" data-aos="fade-up"
                            data-aos-duration="2200">
                            <div class="imgCont rest1 animate">
                                <img src="images/lowest_Fare.png" height="90">
                            </div>
                            <div class="tilleBlock rest1 animate">
                                LOWEST PRICES
                            </div>
                            <div class="second-level-heading descCont rest1 animate">
                                We always give you the lowest price with the best partner offers.
                            </div>
                        </div>
                        <div class="fl rest1 appear-fourth aa-25 animate aos-init" data-aos="fade-up"
                            data-aos-duration="2800">
                            <div class="imgCont rest1 animate">
                                <img src="images/benefits.png" height="90">
                            </div>
                            <div class="tilleBlock rest1 animate">
                                UNMATCHED BENEFITS
                            </div>
                            <div class="second-level-heading descCont rest1 animate">
                                We take care of your travel beyond ticketing by providing you with
                                innovative and unique benefits.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="feedback-form">
            <section>
                <div class="container">
                    <form method="post" action="mailto:Help@bluebus.com" class="form-temp text-center">
                        <h4 style="text-align:center;color:#000">FEEDBACK FORM</h4>
                        <div class="row"><input type="text" placeholder="Name" name="name" required="">
                        </div>
                        <div class="row"> <input type="tel" placeholder="Mobile Number" name="mobile" required=""></div>
                        <div class="row"> <input type="email" placeholder="Email Id" name="email" required=""></div>
                        <div class="row"><textarea name="message" id="" cols="30" rows="10"
                                placeholder="Enter your message" required=""></textarea></div>





                        <!-- <button type="submit" class="btn">Submit</button> -->
                        <input type="submit" class="btn" id="submit" name="submit" title="save" value="Submit">
                    </form>
                </div>
            </section>
        </div>



        <div class="border-separator"></div>
        <div id="awards_div" class="main-body">
            <section>
                <div class="abhibus-info">
                    <div class="titles" id="counter">
                        <div class="col1">
                            <div class="img-pl1">
                                <img src="../images/busloc.png">
                                <span style="float: left;width: 47%;">
                                    <h2 class="counter-value" data-count="100000">100000</h2>
                                    <h4>ROUTES</h4>

                                </span>

                            </div>

                        </div>
                        <div class="col2">
                            <div class="img-pl2">
                                <img src="../images/bus-opr.png">
                                <span style="float: left;width: 47%;">
                                    <h2 class="counter-value" data-count="2500">2500</h2>
                                    <h4>BUS OPERATORS</h4>
                                </span>
                            </div>
                        </div>
                        <div class="col3">
                            <div class="img-pl3">
                                <img src="../images/buswor.png">
                                <span style="float: left;width: 47%;">
                                    <h2 class="counter-value" data-count="300">300</h2>
                                    <h4>hosted operators</h4>
                                </span>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
        <div class="border-separator"></div>


        <div class="main-body" style="display:none;">
            <section id="stats_div">
                <div>
                    <div class="stats-header heading-1 main-header-family rest1 animate">
                        The numbers are growing!
                    </div>
                    <div class="cf stats-v-holder">
                        <div class="fl">
                            <div>
                                <div class="sp rest1 animate">CUSTOMERS</div>
                                <div class="sv rest1 animate">08 M</div>
                                <div class="common-desc second-level-heading rest1 animate">bluebus is
                                    trusted by over 8 million happy customers globally</div>
                            </div>
                        </div>
                        <div class="fl">
                            <div>
                                <div class="sp rest1 animate">OPERATORS</div>
                                <div class="sv rest1 animate">2300</div>
                                <div class="common-desc second-level-heading rest1 animate">network of over
                                    2300 bus operators worldwide</div>
                            </div>
                        </div>
                        <div class="fl">
                            <div>
                                <div class="sp rest1 animate">BUS TICKETS</div>
                                <div class="sv rest1 animate">75+ M</div>
                                <div class="common-desc second-level-heading rest1 animate">Over 75 million
                                    trips booked using bluebus</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</span>
</div>
</div>
<div class="border-separator"></div>
<div class="seo-section cf ad ">
    <div class="main-body ">
        <div class="seo-wrapper cf rest1 animate">
            <div class="w-25 fl  fl tal">
                <div class="seo-header">
                    Top Bus Routes
                </div>
                <a href="https://bluebus.com/search.php?fromCity=Hyderabad&amp;toCity=Bangalore&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="Hyderabad to Bangalore Bus">Hyderabad to Bangalore Bus</a>
                <a href="https://bluebus.com/search.php?fromCity=Bangalore&amp;toCity=Chennai&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="Bangalore to Chennai Bus">Bangalore to Chennai Bus</a>
                <a href="https://bluebus.com/search.php?fromCity=Pune&amp;toCity=Bangalore&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="Pune to Bangalore Bus">Pune to Bangalore Bus</a>
                <a href="https://bluebus.com/search.php?fromCity=Hyderabad&amp;toCity=vizag&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="Mumbai to Bangalore Bus">Hyderabad to vizag Bus</a>
                <a href="javascript:void(0);" class="more-link site-links" title="More >">More &gt;</a>
            </div>
            <div class="w-25 fl  fl tal">
                <div class="seo-header">
                    Top Bus Routes
                </div>
                <a href="https://bluebus.com/search.php?fromCity=Hyderabad&amp;toCity=Tirupati&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="Hyderabad to Tirupati Bus">Hyderabad to Tirupati Bus</a>
                <a href="https://bluebus.com/search.php?fromCity=Chennai&amp;toCity=Bangalore&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="Chennai to Bangalore Bus">Chennai to Bangalore Bus</a>
                <a href="https://bluebus.com/search.php?fromCity=Hyderabad&amp;toCity=Nagpur&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="Hyderabad to Nagpur Bus">Hyderabad to Nagpur Bus</a>
                <a href="https://bluebus.com/search.php?fromCity=Mumbai&amp;toCity=Bangalore&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="vizag to Hyderabad Bus">Mumbai to Bangalore Bus</a>
                <a href="javascript:void(0);" class="more-link site-links" title="More >">More &gt;</a>
            </div>
            <div class="w-25 fl  fl tal">
                <div class="seo-header">
                    Top Bus Routes
                </div>
                <a href="https://bluebus.com/search.php?fromCity=Chennai&amp;toCity=Tirupati&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="Chennai to Tirupati Bus">Chennai to Tirupati Bus</a>
                <a href="https://bluebus.com/search.php?fromCity=Pune&amp;toCity=Chennai&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="Pune to Chennai Bus">Pune to Chennai Bus</a>
                <a href="https://bluebus.com/search.php?fromCity=Bangalore&amp;toCity=Pune&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="Bangalore to Pune Bus">Bangalore to Pune Bus</a>
                <a href="https://bluebus.com/search.php?fromCity=Bangalore&amp;toCity=Goa&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="Bangalore to Goa Bus">Bangalore to Goa Bus</a>
                <a href="javascript:void(0);" class="more-link site-links" title="More >">More &gt;</a>
            </div>
            <div class="w-25 fl  fl tal last">
                <div class="seo-header">
                    Top Bus Routes
                </div>
                <a href="https://bluebus.com/search.php?fromCity=Mumbai&amp;toCity=Ahmedabad&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="Mumbai to Ahmedabad Bus">Mumbai to Ahmedabad Bus</a>
                <a href="https://bluebus.com/search.php?fromCity=kochi&amp;toCity=Chennai&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="kochi to Chennai Bus">kochi to Chennai Bus</a>
                <a href="https://bluebus.com/search.php?fromCity=Pune&amp;toCity=Bangalore&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="Pune to Bangalore Bus">Pune to Bangalore Bus</a>
                <a href="https://bluebus.com/search.php?fromCity=Hyderabad&amp;toCity=Pune&amp;doj=20-09-2023&amp;submit=search"
                    target="_blank" title="New Delhi to Lucknow Bus">Hyderabad to Pune Bus</a>
                <a href="javascript:void(0);" class="more-link site-links" title="More >">More &gt;</a>
            </div>
        </div>
    </div>
</div>
<div class="seo-section cf">
    <div class="main-body ">
        <div class="operator-footer-list cf">
            <ul class="container " style="padding: 0;">
                <h6 class="seo-header">Top Operators</h6>
                <li><a href="javascript:void(0);">SRS Travels</a></li>
                <li><a href="javascript:void(0);">Evacay Bus</a></li>
                <li><a href="javascript:void(0);">Kallada Travels</a></li>
                <li><a href="javascript:void(0);">KPN Travels</a></li>
                <li><a href="javascript:void(0);">Orange Travels</a></li>
                <li><a href="javascript:void(0);">Parveen Travels</a></li>
                <li><a href="javascript:void(0);">Rajdhani Express</a></li>
                <li><a href="javascript:void(0);">VRL Travels</a></li>
                <li><a href="javascript:void(0);">Chartered Speed Bus</a></li>
                <li><a href="javascript:void(0);">Bengal Tiger</a></li>
                <li><a href="javascript:void(0);">SRM Travels</a></li>
                <li><a href="javascript:void(0);">Infant Jesus</a></li>
                <li><a href="javascript:void(0);">Patel Travels</a></li>
                <li><a href="javascript:void(0);">JBT Travels</a></li>
                <li><a href="javascript:void(0);">Shatabdi Travels</a></li>
                <li><a href="javascript:void(0);">Eagle Travels</a></li>
                <li><a href="javascript:void(0);">Kanker Roadways</a></li>
                <li><a href="javascript:void(0);">Komitla</a></li>
                <li><a href="javascript:void(0);">Sri Krishna Travels</a></li>
                <li><a href="javascript:void(0);">Humsafar Travels</a></li>
                <li><a href="javascript:void(0);">Mahasagar Travels</a></li>
                <li><a href="javascript:void(0);">Raj Express</a></li>
                <li><a href="javascript:void(0);">Sharma Travels</a></li>
                <li><a href="javascript:void(0);">Shrinath Travels</a></li>
                <li><a href="javascript:void(0);">Universal Travels</a></li>
                <li><a href="javascript:void(0);">Verma Travels</a></li>
                <li><a href="javascript:void(0);">Gujarat Travels</a></li>
                <li><a href="javascript:void(0);">Madurai Radha Travels</a></li>
                <li><a href="javascript:void(0);">Patel Tours and Travels</a></li>
                <li><a href="javascript:void(0);">Paulo Travels</a></li>
                <li><a href="javascript:void(0);">Royal Travels</a></li>
                <li><a href="javascript:void(0);">Amarnath Travels</a></li>
                <li><a href="javascript:void(0);">Vaibhav Travels</a></li>
                <li><a href="javascript:void(0);">Ganesh Travels</a></li>
                <li><a href="javascript:void(0);">Jabbar Travels</a></li>
                <li><a href="javascript:void(0);">Jain Travels</a></li>
                <li><a href="javascript:void(0);">Manish Travels</a></li>
                <li><a href="javascript:void(0);">Pradhan Travels</a></li>
                <li><a href="javascript:void(0);">YBM Travels</a></li>
                <li><a href="javascript:void(0);">Hebron Transports</a></li>
                <li><a href="javascript:void(0);">Mahalaxmi travels</a></li>
                <li><a href="javascript:void(0);">MR Travels</a></li>
                <li><a href="javascript:void(0);">Vivegam Travels</a></li>
                <li><a href="javascript:void(0);">VST Travels</a></li>
                <li><a href="javascript:void(0);">Jakhar Travels</a></li>
                <li><a href="javascript:void(0);">Kaleswari Travels</a></li>
                <li><a href="javascript:void(0);">Mahendra Travels</a></li>
                <li><a href="javascript:void(0);">Neeta Tours and Travels</a></li>
                <li><a href="javascript:void(0);">Yamani Travels</a></li>
                <li><a href="javascript:void(0);">Arthi Travels</a></li>
            </ul>
            <div class="more-link"></div>
        </div>
    </div>
</div>
<!-- Footer Start Here -->
<footer id="rh_footer">
    <div class="footer-row">
        <div class="cf promotion main-body rest1 animate aos-init" data-aos="fade-up" data-aos-duration="1500">
            <div class="w-100 pR fl footer-links">
                <div class="dib fr foot-wrapper">
                    <div class="row fl">
                        <div class="dib" style="color: #32a3e1; font-size: 16px;">
                            About bluebus
                        </div>
                        <a href="https://bluebus.com/footer/about.php">About Us</a>
                        <a href="https://bluebus.com/footer/contact.php">Contact Us</a>
                        <a href="https://bluebus.com/footer/sitemap.php">Sitemap</a>
                        <a href="https://bluebus.com/footer/career.php">Careers</a>
                        <a href="https://bluebus.com/agent" target="_blank">Agent</a>

                    </div>
                    <div class="row fl">
                        <div class="dib" style="color: #32a3e1; font-size: 16px;">
                            Info
                        </div>
                        <a href="https://bluebus.com/footer/terms.php">T &amp; C</a>
                        <a href="https://bluebus.com/footer/privacy_policy.php">Privacy Policy</a>
                        <a href="https://bluebus.com/footer/faq.php">FAQ</a>
                        <a href="https://bluebus.com/footer/insurance.php">Insurance Partner</a>
                        <a href="https://bluebus.com/footer/top_operators.php">Top Operators</a>
                    </div>

                </div>

                <div class="fl rights-cont">
                    <div class="img-cont"> <a href="https://bluebus.com/index.php"><img
                                src="https://bluebus.com/images/recon.png" style="width: 75px;"></a> </div>
                    <div> bluebus is the world's largest online bus ticket booking service trusted by over 8
                        million happy customers globally. bluebus offers bus ticket booking through its website,iOS
                        and Android mobile apps for all major routes. </div>
                    <div style="float: left">
                        <div id="social-media">
                            <a target="_blank" href=""><span class="fa fa-facebook-square"></span></a>
                            <a target="_blank" href=""><span class="fa fa-twitter-square"></span></a>

                        </div> <span>Ⓒ</span> <span> 2022 All rights reserved</span>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!--<div class="footer-row">
        <div class="cf promotion">
            <div class="w-100 pR footer-links">
                <div class="dib foot-wrapper">
                    <div class="row fl">
                        <div class="dib">
                            About
                        </div>
                        	<a href="index.php">Home</a>
                            <a href="#">About Us</a>
                            <a href="#">My Ticket</a>
                            <a href="#">Cancellations</a>
                            <a href="#">Contact Us</a>
                            <a href="#">Careers</a>
                    </div>
                    <div class="row fl">
                        <div class="dib">
                            Info
                        </div>
                            <a href="#">Terms &amp; Conditions</a>
                            <a href="#">Privacy Policy</a>
                            <a href="#" alt="" title="">Cancellation & Refund Policy</a>
                            <a href="#">Offers</a>
                            <a href="#">FAQ</a>
                            <a href="#">Agent Registration</a>
                    </div>
                    <div class="row fl">
                        <div class="dib">
                            Payment Methods
                        </div>
                             <ul>
                                <li><img style="height: 30px;" src="images/mastercard.png"></li>
                                <li><img style="height: 30px;" src="images/visa.png"></li>
                                <li><img style="height: 30px;border:none;" src="images/Norton-Secured.png" height="38"></li>
                            </ul>
                    </div>
                </div>
                <div class="fr rights-cont">
<!--                <div class="img-cont">
                        <img src="images/logo.png">
                    </div>-->
    <!--<div>
                       Bus is the world's largest online bus ticket booking service trusted by over 8 million happy customers globally. <strong>BUSRAJA</strong> offers bus ticket booking through its website,iOS and Android mobile apps for all major routes.
                    </div>-->

    <div class="footerresp">
        <div class="cf"></div>
        <span>©2022. All rights reserved.</span>
    </div>




</footer>
<script>
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 250) {
        $("#header").addClass("stickyHeader");
    } else {
        $("#header").removeClass("stickyHeader");
    }
});
</script>
<script>
$(window).scroll(function() {
    var sticky = $('.fixer'),
        scroll = $(window).scrollTop();

    if (scroll >= 100) sticky.addClass('fixed');
    else sticky.removeClass('fixed');
});
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
AOS.init();
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
$('#ab').slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 1,
    cssEase: 'linear',
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 768,
            settings: "unslick"
        },
        {
            breakpoint: 480,
            settings: "unslick"
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]



});
</script>

<script>
$(document).ready(function() {
    $('.slick-prev').click(function() {

        var a = $('#ab').length();
        //alert(a);

    });
});
</script>

<script>
$(document).ready(function() {
    $('ul li span').click(function() {
        $('li span').removeClass("bb");
        $(this).addClass("bb");

    });
});
</script>
<script>
$('.checkbox').change(function() {
    if ($(this).is(":checked")) {
        $('.changeme').addClass('red');
    } else {
        $('.changeme').removeClass('red');
    }
});
</script>

<script type="text/javascript" charset="utf8" src="https://bluebus.com/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#table_id').DataTable();
});
</script>


<script>
$.fn.center = function() {
    this.css("position", "absolute");
    this.css("top", Math.max(0, (
            ($(window).height() - $(this).outerHeight()) / 2) +
        $(window).scrollTop()) + "px");
    this.css("left", Math.max(0, (
            ($(window).width() - $(this).outerWidth()) / 2) +
        $(window).scrollLeft()) + "px");
    return this;
}

$("#overlay").show();
$("#overlay-content1").show().center();

setTimeout(function() {
    $("#overlay").fadeOut();
}, 4000);
</script>
<script>
$(document).ready(function() {

    $(".togglebtn").on('click', function() {
        var pickup = $('#originid').val();
        $('#originid').val($('#destinationid').val());
        $('#destinationid').val(pickup);
    });

});

// $('#originid').typeahead({
//     // alert('i am fine');
//     name: 'ter_from',
//     remote: {
//         url: 'includes/busSource.php?query=%QUERY'
//     },
//     minLength: 3, // send AJAX request only after user type in at least 3 characters
//     limit: 10 // limit to show only 10 results
// });
// $('#destinationid').typeahead({
//     name: 'tag',
//     remote: {
//         url: 'includes/busSource.php?query=%QUERY'
//     },
//     minLength: 3, // send AJAX request only after user type in at least 3 characters
//     limit: 10 // limit to show only 10 results
// });



/*$("#search").click(function () {
        $("#err").html("");
	$("#err1").html("");
        $("#err2").html("");
        var originid=$("#originid").val();
	var destinationid=$("#destinationid").val();
        var datepicker=$("#datepicker").val();
	if(originid=='')
	{
		$("#err").html("Please Enter Orgin");
		return false;
	}
        else if(destinationid=='')
	{
		$("#err1").html("Please Enter Destination");
		return false;
	}
       else if(datepicker=='')
	{
		$("#err2").html("Please Enter Depart Date");
		return false;
	}
        else
	{
		$("#booking").submit();
		return true;
	}
	
});*/

/*$("#originid").keyup(function () {
	 if ($(this).val()) {
		$("#err").hide();
	 }
	 else {
		$("#err").show();
	 }
  });
$("#destinationid").keyup(function () {
	 if ($(this).val()) {
		$("#err1").hide();
	 }
	 else {
		$("#err1").show();
	 }
  });

$("#datepicker").click(function () {
    if ($(this).val()) {
		$("#err2").hide();
    }
    	 else {
		$("#err2").show();
	 }
  });*/

$(function() {
    $('.searchAvail input[type="text"]').on('focus blur', function() {
        if ($(this).parents('li').find('label.db').hasClass('move-up')) {
            if ($(this).val() == "") {
                $(this).parents('li').find('label.db').addClass('move-up');
            } else {
                $(this).parents('li').find('label.db').addClass('move-up');
            }
        } else {
            $(this).parents('li').find('label.db').addClass('move-up');
        }
    });
});

window.onload = function() {
    $('body').addClass('homepage');
};
</script>

<script>
var a = 0;
$(window).scroll(function() {

    var oTop = $('#counter').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
        $('.counter-value').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                    countNum: countTo
                },

                {

                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                        //alert('finished');
                    }

                });
        });
        a = 1;
    }

});
</script>



<script src="js/jquery-1.12.4.js"></script>
<script src="js/jquery-ui.js"></script>

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all">
</div>
</body>

</html>
<?php //include('footer.php') ?>
