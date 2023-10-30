<?php include 'header.php' ?>
<div id="container" class="cf">
	<div class="wrap1"><style>
.w-10 
{
	cursor:pointer;
}
.w-15
{
	cursor:pointer;
}
.stickyHeader {
    background: #ffffff none repeat scroll 0 0 !important;
    position: relative !important;
    width: 100% !important;
}
</style>
<div id="fixer" class="fixer">
    	<div class="modify-sec-onward modify-sec clearfix" style="">
			<div class="w-50 fl jour-info clearfix">
				<div class="onward d-block fl">
				    
                    <span class="src" title="Chennai">Chennai</span>
                    <i class="fa fa-long-arrow-right place-right" aria-hidden="true"></i>
                    <span class="dst" title="Trichy">Namakkal</span>
                    <span class="prev"><a href="search.php?fromCity=Chennai&amp;toCity=Namakkal&amp;doj=2023-10-10&amp;prev"><i class="fa fa-angle-left date-left" aria-hidden="true"></i></a></span>
                    <span id="searchDat" class="searchDate">10 Oct</span>
                    <span class="next"><a href="search.php?fromCity=Chennai&amp;toCity=Namakkal&amp;doj=2023-10-10&amp;next"><i class="fa fa-angle-right date-right" aria-hidden="true"></i></a></span>
                </div>
				<div class="onward-modify-btn g-button clearfix fl">Modify</div>
			</div>
			<!-- <div class="add-return-blk fr">
                <div class="addreturn-btn fr"><span class="g-button">Add a return ticket</span></div>
			</div> -->
		</div>
        <section class="clearfix search-wrapper" style="display: none;">
        <form action="" method="GET">
           <div class="search-section">
              <div class="parent-textbox  fl">
                 <div class="top-lbl">FROM</div>
                 <div class="textbox fl"><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input class="tt-hint" type="text" autocomplete="off" spellcheck="off" disabled="" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgba(0, 0, 0, 0);"><input name="fromCity" id="originid" class="tt-query" data-id="123" autocomplete="off" value="Chennai" type="text" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><span style="position: absolute; left: -9999px; visibility: hidden; white-space: nowrap; font-family: poppins, OpenSans, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 700; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></span><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"></span></span></div>
              </div>
              <span class="icon-doublearrow icon fl" id="switchButton"></span>
              <div class="parent-textbox  fl">
                 <div class="top-lbl">To</div>
                 <div class="textbox fl"><span class="twitter-typeahead" style="position: relative; display: inline-block;"><input class="tt-hint" type="text" autocomplete="off" spellcheck="off" disabled="" style="position: absolute; top: 0px; left: 0px; border-color: transparent; box-shadow: none; background: none 0% 0% / auto repeat scroll padding-box border-box rgba(0, 0, 0, 0);"><input name="toCity" id="destinationid" class="tt-query" data-id="71929" autocomplete="off" value="Namakkal" type="text" spellcheck="false" dir="auto" style="position: relative; vertical-align: top; background-color: transparent;"><span style="position: absolute; left: -9999px; visibility: hidden; white-space: nowrap; font-family: poppins, OpenSans, Arial, Helvetica, sans-serif; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 700; word-spacing: 0px; letter-spacing: 0px; text-indent: 0px; text-rendering: auto; text-transform: none;"></span><span class="tt-dropdown-menu" style="position: absolute; top: 100%; left: 0px; z-index: 100; display: none;"></span></span></div>
              </div>
              <div class="textbox fl">
                 <div class="top-lbl">DATE</div>
                 <input id="onward_cal" name="doj" value="10-10-2023" class="datepickers" type="text">
                 <div id="onward_modify" class="calendar-blk-search calendar-blk-ond hide"></div>
              </div>
              <div class="parent-textbox  fl"><button name="submit" type="submit" value="search" class=" button ms-btn">SEARCH</button></div>
              <div class="fr" id="mod_cancel"><i class="icon icon-cross"></i></div>
           </div>
           </form>
        </section>
    </div>
    <div class="filtersilde">
    <span class="btn btn-theme-transparent pull-left hidden-lg hidden-md btnss" onclick="open_sidebar();" style="padding: 3px 5px;;position: relative;left: 16px;top: 6px;border: 2px Solid;"><i class="fa fa-bars"></i></span>
    </div>
    <div class="srp-data clearfix">
    	<div id="filter-block" class="filter-sec fl w-20 sidebar close_now">
        <span class="btn btn-theme-transparent pull-left hidden-lg hidden-md btnss" onclick="close_sidebar();" style="border-radius:50%; position: absolute; top:16px;"><i class="fa fa-times"></i></span>
        	<div class="filter-details f-12 d-color filtercolor">
            	<div class="title f-bold">FILTERS<!--<span class="clearFilters fr f-12">RESET</span>--></div>
                <div class="details">
                	<div class="filter-titles f-12 f-bold">DEPARTURE TIME</div>
                    <ul class="dept-time dt-time-filter" id="chec-id">
                       <li class="checkbox">
                       <input id="dtBefore 6 am" name="depart[]" value="1" type="checkbox" class="chec-sec" onclick="return filter();">
                       <label for="dtBefore 6 am" class="custom-checkbox"></label><span><i class="icon fl icon-morning"></i></span><label for="dtBefore 6 am" class="cbox-label" title="Before 6 am"><span class="changeme">Before 6 am (<span id="time_1">0</span>)</span></label></li>
                       <li class="checkbox"><input name="depart[]" value="2" id="dt6 am to 12 pm" type="checkbox" class="chec-sec" onclick="return filter();"><label for="dt6 am to 12 pm" class="custom-checkbox"></label><span><i class="icon fl icon-afternoon"></i></span><label for="dt6 am to 12 pm" class="cbox-label" title="6 am to 12 pm"><span class="changeme">6 am to 12 pm (<span id="time_2">2</span>)</span></label></li>
                       <li class="checkbox"><input name="depart[]" value="3" id="dt12 pm to 6 pm" type="checkbox" class="chec-sec" onclick="return filter();"><label for="dt12 pm to 6 pm" class="custom-checkbox"></label><span><i class="icon fl icon-evening"></i></span><label for="dt12 pm to 6 pm" class="cbox-label" title="12 pm to 6 pm"><span class="changeme">12 pm to 6 pm (<span id="time_3">0</span>)</span></label></li>
                       <li class="checkbox"><input name="depart[]" value="4" id="dtAfter 6 pm" type="checkbox" class="chec-sec" onclick="return filter();"><label for="dtAfter 6 pm" class="custom-checkbox"></label><span><i class="icon fl icon-night"></i></span><label for="dtAfter 6 pm" class="cbox-label" title="After 6 pm"><span class="changeme">After 6 pm (<span id="time_4">13</span>)</span></label></li>
                    </ul>
                    <div class="filter-titles f-12 f-bold">BUS TYPES</div>
                    <ul class="list-chkbox">
                       <li class="checkbox"><input name="bustype[]" id="bt_SEATER" value="seater" type="checkbox" class="chec-sec" onclick="return filter();"><label for="bt_SEATER" class="custom-checkbox"></label><label for="bt_SEATER" class="cbox-label" title="SEATER">SEATER (<span id="seater">4</span>)</label></li>
                       <li class="checkbox"><input name="bustype[]" id="bt_SLEEPER" value="sleeper" type="checkbox" class="chec-sec" onclick="return filter();"><label for="bt_SLEEPER" class="custom-checkbox"></label><label for="bt_SLEEPER" class="cbox-label" title="SLEEPER">SLEEPER (<span id="sleeper">13</span>)</label></li>
                       <li class="checkbox"><input name="bustype[]" id="bt_AC" value="ac" type="checkbox" class="chec-sec" onclick="return filter();"><label for="bt_AC" class="custom-checkbox"></label><label for="bt_AC" class="cbox-label" title="AC">AC (<span id="ac">15</span>)</label></li>
                       <li class="checkbox"><input name="bustype[]" id="bt_NONAC" value="nonac" type="checkbox" class="chec-sec" onclick="return filter();"><label for="bt_NONAC" class="custom-checkbox"></label><label for="bt_NONAC" class="cbox-label" title="NONAC">NONAC (<span id="non_ac">0</span>)</label></li>
                    </ul>
                    <div class="filter-titles f-12 f-bold">ARRIVAL TIME</div>
                    <ul class="dept-time at-time-filter">
                       <li data-value="" class="checkbox"><input id="atBefore 6 am" name="arrival[]" value="5" type="checkbox" onclick="return filter();"><label for="atBefore 6 am" class="custom-checkbox"></label><span><i class="icon fl icon-morning"></i></span><label for="atBefore 6 am" class="cbox-label" title="Before 6 am">Before 6 am (<span id="time_5">8</span>)</label></li>
                       <li data-value="" class="checkbox" onclick="return filter();"><input name="arrival[]" id="at6 am to 12 pm" value="6" type="checkbox"><label for="at6 am to 12 pm" class="custom-checkbox"></label><span><i class="icon fl icon-afternoon"></i></span><label for="at6 am to 12 pm" class="cbox-label" title="6 am to 12 pm">6 am to 12 pm (<span id="time_6">5</span>)</label></li>
                       <li data-value="" class="checkbox" onclick="return filter();"><input name="arrival[]" id="at12 pm to 6 pm" value="7" type="checkbox"><label for="at12 pm to 6 pm" class="custom-checkbox"></label><span><i class="icon fl icon-evening"></i></span><label for="at12 pm to 6 pm" class="cbox-label" title="12 pm to 6 pm">12 pm to 6 pm (<span id="time_7">1</span>)</label></li>
                       <li data-value="" class="checkbox" onclick="return filter();"><input name="arrival[]" id="atAfter 6 pm" value="8" type="checkbox"><label for="atAfter 6 pm" class="custom-checkbox"></label><span><i class="icon fl icon-night"></i></span><label for="atAfter 6 pm" class="cbox-label" title="After 6 pm">After 6 pm (<span id="time_8">1</span>)</label></li>
                    </ul>


                </div>
            </div>
        </div>
		<?php print_r($_POST);
			extract($_POST);
				echo '<pre>';print_r($api->getschedules($orgin,$destination,$date_pick));echo '</pre>';exit; ?>
        <div class="sort-results w-80 fl"> 	
        	<div class="sort-sec clearfix onward ">
               <div class="w-40 fl"><span class="w-60 d-block"><span class="f-bold">15 Buses </span>found</span><span class="w-30 d-block f-12 d-color f-bold t-right">SORT BY:</span></div>
               <div class="w-10 fl f-12 d-color"><a id="depart">Departure<i class=""></i></a></div>
               <div class="w-10 fl f-12 d-color"><a class="sort" data-sort="sm_Duration">Duration<i class=""></i></a></div>
               <div class="w-10 fl f-12 d-color"><a class="sort" data-sort="sm_Arrival">Arrival<i class=""></i></a></div>
               <!--<div class="w-10 fl f-12 d-color"><a>Ratings<i class=""></i></a></div>-->
               <div class="w-15 fl f-12 d-color"><a class="sort" data-sort="sm_Fare">Fare<i class=""></i></a></div>
               <div class="w-15 fl f-12 d-color"><a class="sort" data-sort="sm_Seats">Seats Available<i class=""></i></a></div>
            </div>
            <div class="result-sec">
                <ul class="bus-items">
                                    <li id="838157810" class="row-sec  bus_filt clearfix time_4 time_6 time_seater time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">S R T</div>
                                    <div class="bus-type m-top-16 l-color">2+2, Volvo B11R A/C Seater Push Back, AC, Non-Video</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">23:00</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">07:30 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">06:30</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">550.0</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">33<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_838157810" onclick="showSeatLayout('838157810','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">View Seats</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_838157810" onclick="hideSeatLayout('838157810','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">Hide Seats</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val amenti">Amenities</span></li>
                                                                        <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="838157810">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">23:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">23:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Sivan Koil Bus Stop">Sivan Koil Bus Stop</span></li>
                                                                                           <li><span class="time">23:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Hotel Anjappar">Hotel Anjappar</span></li>
                                                                                           <li><span class="time">23:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">23:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Fuel Pump Station">Fuel Pump Station</span></li>
                                                                                           <li><span class="time">23:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Trisulam Bus Stop">Trisulam Bus Stop</span></li>
                                                                                           <li><span class="time">23:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stand   Kpn Bunk">Bus Stand   Kpn Bunk</span></li>
                                                                                           <li><span class="time">23:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stand">Bus Stand</span></li>
                                                                                           <li><span class="time">23:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp. Hindu Mission Hospital">Opp. Hindu Mission Hospital</span></li>
                                                                                           <li><span class="time">23:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop Lamp Post">Bus Stop Lamp Post</span></li>
                                                                                           <li><span class="time">23:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Vandalur Zoo">Vandalur Zoo</span></li>
                                                                                           <li><span class="time">23:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Nh   45">Nh   45</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">06:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Salem Road">Salem Road</span></li>
                                                                                           <li><span class="time">06:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp. Town Bus Stand">Opp. Town Bus Stand</span></li>
                                                                                           <li><span class="time">06:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stand">Bus Stand</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-6 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹550(100%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 6-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹275(50%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-72 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹137.5(25%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 72-168 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹55(10%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 168-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹55(10%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Emergency exit</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Fire Extinguisher</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Hammer (to break glass)</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Live Bus Tracking</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> M Ticket</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Driver/ Conductor with masks</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> No Blankets and No linen provided</span></div>
                                                	</div>
                                                </div>
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_838157810" id="seatSelect_838157810">
                        </div>
						
                    </li>
                                    <li id="838476317" class="row-sec  bus_filt clearfix time_4 time_5 time_sleeper time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">KARUR MAARUTI TRAVELS</div>
                                    <div class="bus-type m-top-16 l-color">2+1, Sleeper, AC, Non-Video</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">21:30</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">07:45 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">05:15</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">820.0,SUB</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">0<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_838476317"><div class="button view-seats fr">Sold Out</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_838476317"><div class="button view-seats fr">Sold Out</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="838476317">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">21:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bala Senthil Travels Shop No;50 5th  Platform 9489252555">Bala Senthil Travels Shop No;50 5th  Platform 9489252555</span></li>
                                                                                           <li><span class="time">21:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">21:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Sivan Kovil Bus Stop">Sivan Kovil Bus Stop</span></li>
                                                                                           <li><span class="time">21:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Hotel Anjappar">Near Hotel Anjappar</span></li>
                                                                                           <li><span class="time">22:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Metro Station">Metro Station</span></li>
                                                                                           <li><span class="time">22:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Alandur Court">Alandur Court</span></li>
                                                                                           <li><span class="time">22:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Radison Hotel Near">Radison Hotel Near</span></li>
                                                                                           <li><span class="time">22:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Airport">Airport</span></li>
                                                                                           <li><span class="time">22:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Palavaram Hp Bunk">Palavaram Hp Bunk</span></li>
                                                                                           <li><span class="time">22:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">22:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Oppsite Hindumision Hospital">Oppsite Hindumision Hospital</span></li>
                                                                                           <li><span class="time">22:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">22:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Zoo">Near Zoo</span></li>
                                                                                           <li><span class="time">23:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">23:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Naear Bus Stand">Naear Bus Stand</span></li>
                                                                                           <li><span class="time">23:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">23:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">23:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">23:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Chengalpattu  Toll Gate">Chengalpattu  Toll Gate</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">05:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Park Road">Park Road</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-3 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹820(100%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 3-6 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹615(75%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 6-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹205(25%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹123(15%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_838476317" id="seatSelect_838476317">
                        </div>
						
                    </li>
                                    <li id="838502965" class="row-sec  bus_filt clearfix time_4 time_6 time_sleeper time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">S R T</div>
                                    <div class="bus-type m-top-16 l-color">2+1, Volvo Multi Axle Sleeper, AC</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">22:30</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">08:00 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">06:30</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">700.0,UB</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">28<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_838502965" onclick="showSeatLayout('838502965','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">View Seats</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_838502965" onclick="hideSeatLayout('838502965','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">Hide Seats</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val amenti">Amenities</span></li>
                                                                        <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="838502965">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">22:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stand">Bus Stand</span></li>
                                                                                           <li><span class="time">22:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Sivan Kovil Bus Stop">Sivan Kovil Bus Stop</span></li>
                                                                                           <li><span class="time">22:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Hotel Anjappar ">Hotel Anjappar </span></li>
                                                                                           <li><span class="time">22:47</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">22:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Fuel Pump Station">Fuel Pump Station</span></li>
                                                                                           <li><span class="time">22:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Stand near the main road signal">Stand near the main road signal</span></li>
                                                                                           <li><span class="time">23:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">23:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">23:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp. Hindu Mission Hospital">Opp. Hindu Mission Hospital</span></li>
                                                                                           <li><span class="time">23:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Omni Bus Stop">Omni Bus Stop</span></li>
                                                                                           <li><span class="time">23:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Vandalur Zoo">Vandalur Zoo</span></li>
                                                                                           <li><span class="time">23:58</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Nh   45">Nh   45</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">06:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Salem Road">Salem Road</span></li>
                                                                                           <li><span class="time">06:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stand">Bus Stand</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-6 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹700(100%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 6-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹350(50%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-72 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹175(25%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 72-168 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹70(10%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 168-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹70(10%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Emergency exit</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Fire Extinguisher</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Hammer (to break glass)</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Live Bus Tracking</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Reading Light</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> M Ticket</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> No Blankets and No linen provided</span></div>
                                                	</div>
                                                </div>
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_838502965" id="seatSelect_838502965">
                        </div>
						
                    </li>
                                    <li id="838503656" class="row-sec  bus_filt clearfix time_4 time_6 time_sleeper time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">S R T</div>
                                    <div class="bus-type m-top-16 l-color">2+1, Sleeper, Non-AC, Non-Video</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">20:30</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">09:30 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">06:00</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">550.0,UB</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">24<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_838503656" onclick="showSeatLayout('838503656','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">View Seats</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_838503656" onclick="hideSeatLayout('838503656','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">Hide Seats</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val amenti">Amenities</span></li>
                                                                        <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="838503656">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">20:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">20:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Sivan Kovil Bus Stop">Sivan Kovil Bus Stop</span></li>
                                                                                           <li><span class="time">20:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Hotel Anjappar">Hotel Anjappar</span></li>
                                                                                           <li><span class="time">21:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp. Olympia Tech Park Junction">Opp. Olympia Tech Park Junction</span></li>
                                                                                           <li><span class="time">21:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">21:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Shell Petrol Bunk">Shell Petrol Bunk</span></li>
                                                                                           <li><span class="time">21:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Sri Aadhi Kubera Jalakandeshwarar Temple">Sri Aadhi Kubera Jalakandeshwarar Temple</span></li>
                                                                                           <li><span class="time">21:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Bay Opp. Main Gate">Bus Bay Opp. Main Gate</span></li>
                                                                                           <li><span class="time">21:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Equitas Small Finance Bank">Equitas Small Finance Bank</span></li>
                                                                                           <li><span class="time">22:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Toll Plaza">Toll Plaza</span></li>
                                                                                           <li><span class="time">22:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="N.H Bye Pass Entrance Arch">N.H Bye Pass Entrance Arch</span></li>
                                                                                           <li><span class="time">23:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp. Hotel Aaryas">Opp. Hotel Aaryas</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">05:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp. Town Bus Stand">Opp. Town Bus Stand</span></li>
                                                                                           <li><span class="time">06:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stand">Bus Stand</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-6 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹550(100%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 6-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹275(50%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-72 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹137.5(25%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 72-168 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹55(10%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 168-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹55(10%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Emergency exit</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Fire Extinguisher</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Live Bus Tracking</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Reading Light</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> M Ticket</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Extra legroom</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> No Blankets and No linen provided</span></div>
                                                	</div>
                                                </div>
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_838503656" id="seatSelect_838503656">
                        </div>
						
                    </li>
                                    <li id="838504022" class="row-sec  bus_filt clearfix time_4 time_5 time_sleeper time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">S R T</div>
                                    <div class="bus-type m-top-16 l-color">2+2, B11R I-Shift Volvo Multi Axle Semi Sleeper, AC</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">21:15</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">08:15 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">05:30</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">444.0</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">34<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_838504022" onclick="showSeatLayout('838504022','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">View Seats</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_838504022" onclick="hideSeatLayout('838504022','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">Hide Seats</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val amenti">Amenities</span></li>
                                                                        <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="838504022">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">21:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">21:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Hotel Nalas Aappa Kadai">Hotel Nalas Aappa Kadai</span></li>
                                                                                           <li><span class="time">21:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Shree Mithai   Opp. Drunken Monkey">Shree Mithai   Opp. Drunken Monkey</span></li>
                                                                                           <li><span class="time">21:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="P.O Bus Stop">P.O Bus Stop</span></li>
                                                                                           <li><span class="time">21:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Fuel Pump Station">Fuel Pump Station</span></li>
                                                                                           <li><span class="time">21:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Stand Near The Main Road Signal">Stand Near The Main Road Signal</span></li>
                                                                                           <li><span class="time">21:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Police Station Opposite">Police Station Opposite</span></li>
                                                                                           <li><span class="time">22:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp. Police Station">Opp. Police Station</span></li>
                                                                                           <li><span class="time">22:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Chennai">Chennai</span></li>
                                                                                           <li><span class="time">22:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Omni Bus Stop">Omni Bus Stop</span></li>
                                                                                           <li><span class="time">22:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Vandalur Zoo">Vandalur Zoo</span></li>
                                                                                           <li><span class="time">22:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Nh   45">Nh   45</span></li>
                                                                                           <li><span class="time">22:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">23:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Toll Gate">Toll Gate</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">05:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Park Road">Park Road</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-6 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹444(100%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 6-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹222(50%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-72 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹111(25%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 72-168 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹44.4(10%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 168-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹44.4(10%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Emergency exit</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Hammer (to break glass)</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Live Bus Tracking</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Reading Light</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> M Ticket</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Extra legroom</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> No Blankets and No linen provided</span></div>
                                                	</div>
                                                </div>
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_838504022" id="seatSelect_838504022">
                        </div>
						
                    </li>
                                    <li id="838504184" class="row-sec  bus_filt clearfix time_2 time_8 time_sleeper time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">S R T</div>
                                    <div class="bus-type m-top-16 l-color">2+1, Sleeper, AC</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">10:30</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">08:00 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">18:30</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">569.0,UB</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">21<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_838504184" onclick="showSeatLayout('838504184','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">View Seats</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_838504184" onclick="hideSeatLayout('838504184','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">Hide Seats</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val amenti">Amenities</span></li>
                                                                        <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="838504184">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">10:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Fire Station.">Fire Station.</span></li>
                                                                                           <li><span class="time">10:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Toll Gate Nh   Only">Toll Gate Nh   Only</span></li>
                                                                                           <li><span class="time">11:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Omni Bus Stop">Omni Bus Stop</span></li>
                                                                                           <li><span class="time">11:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Vandalur Zoo">Vandalur Zoo</span></li>
                                                                                           <li><span class="time">11:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Nh   45">Nh   45</span></li>
                                                                                           <li><span class="time">11:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">11:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Contact Driver   9488345555">Contact Driver   9488345555</span></li>
                                                                                           <li><span class="time">11:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Toll Gate">Toll Gate</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">18:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp. Bus Stand">Opp. Bus Stand</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-6 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹569(100%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 6-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹284.5(50%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-72 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹142.25(25%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 72-168 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹56.9(10%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 168-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹56.9(10%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Fire Extinguisher</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Hammer (to break glass)</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Live Bus Tracking</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Reading Light</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> M Ticket</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Extra legroom</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> No Blankets and No linen provided</span></div>
                                                	</div>
                                                </div>
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_838504184" id="seatSelect_838504184">
                        </div>
						
                    </li>
                                    <li id="838569678" class="row-sec  bus_filt clearfix time_4 time_5 time_sleeper time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">S R T</div>
                                    <div class="bus-type m-top-16 l-color">2+1, Sleeper, Non-AC, Non-Video</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">21:00</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">08:00 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">05:00</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">600.0,UB</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">19<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_838569678" onclick="showSeatLayout('838569678','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">View Seats</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_838569678" onclick="hideSeatLayout('838569678','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">Hide Seats</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val amenti">Amenities</span></li>
                                                                        <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="838569678">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">21:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stand">Bus Stand</span></li>
                                                                                           <li><span class="time">21:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Sivan Kovil Bus Stop">Sivan Kovil Bus Stop</span></li>
                                                                                           <li><span class="time">21:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Hotel Anjappar Entrance">Hotel Anjappar Entrance</span></li>
                                                                                           <li><span class="time">21:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">21:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Fuel Pump Station">Fuel Pump Station</span></li>
                                                                                           <li><span class="time">21:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Stand near the main road signal">Stand near the main road signal</span></li>
                                                                                           <li><span class="time">21:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stand">Bus Stand</span></li>
                                                                                           <li><span class="time">22:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stand">Bus Stand</span></li>
                                                                                           <li><span class="time">22:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp. Hindu Mission Hospital">Opp. Hindu Mission Hospital</span></li>
                                                                                           <li><span class="time">22:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Omni Bus Stop">Omni Bus Stop</span></li>
                                                                                           <li><span class="time">22:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Vandalur Zoo">Vandalur Zoo</span></li>
                                                                                           <li><span class="time">22:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Nh   45">Nh   45</span></li>
                                                                                           <li><span class="time">23:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">23:06</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Toll Gate">Toll Gate</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">04:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Salem Road">Salem Road</span></li>
                                                                                           <li><span class="time">05:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus STAND">Bus STAND</span></li>
                                                                                           <li><span class="time">05:05</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp. Town Bus Stand">Opp. Town Bus Stand</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-6 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹600(100%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 6-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹300(50%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-72 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹150(25%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 72-168 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹60(10%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 168-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹60(10%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Emergency exit</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Fire Extinguisher</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Hammer (to break glass)</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Live Bus Tracking</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> M Ticket</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Driver/ Conductor with masks</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> No Blankets and No linen provided</span></div>
                                                	</div>
                                                </div>
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_838569678" id="seatSelect_838569678">
                        </div>
						
                    </li>
                                    <li id="838572481" class="row-sec  bus_filt clearfix time_2 time_7 time_seater time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">S R T</div>
                                    <div class="bus-type m-top-16 l-color">2+2, Volvo B11R A/C Seater Push Back, AC, Non-Video</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">07:00</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">07:30 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">14:30</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">476.0</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">30<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_838572481" onclick="showSeatLayout('838572481','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">View Seats</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_838572481" onclick="hideSeatLayout('838572481','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">Hide Seats</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val amenti">Amenities</span></li>
                                                                        <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="838572481">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">07:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="In Front Of Election Comission">In Front Of Election Comission</span></li>
                                                                                           <li><span class="time">07:05</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Vengeeswarar Temple">Vengeeswarar Temple</span></li>
                                                                                           <li><span class="time">07:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Anjappar Chettinad Restaurant">Anjappar Chettinad Restaurant</span></li>
                                                                                           <li><span class="time">07:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">07:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Omni Bus Stop">Omni Bus Stop</span></li>
                                                                                           <li><span class="time">07:22</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Fuel Pump Station">Fuel Pump Station</span></li>
                                                                                           <li><span class="time">07:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Stand Near The Main Road Signal">Stand Near The Main Road Signal</span></li>
                                                                                           <li><span class="time">07:27</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Police Station Opposite">Police Station Opposite</span></li>
                                                                                           <li><span class="time">07:33</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp. Reliance Digital">Opp. Reliance Digital</span></li>
                                                                                           <li><span class="time">07:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Omni Bus Stop">Omni Bus Stop</span></li>
                                                                                           <li><span class="time">07:47</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Omni Bus Stop">Omni Bus Stop</span></li>
                                                                                           <li><span class="time">07:54</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Vandalur Zoo">Vandalur Zoo</span></li>
                                                                                           <li><span class="time">08:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Nh   45">Nh   45</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">14:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp. Bus Stand">Opp. Bus Stand</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-6 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹476(100%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 6-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹238(50%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-72 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹119(25%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 72-168 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹47.6(10%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 168-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹47.6(10%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Emergency exit</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Fire Extinguisher</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Hammer (to break glass)</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Live Bus Tracking</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Reading Light</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> M Ticket</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Driver/ Conductor with masks</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> No Blankets and No linen provided</span></div>
                                                	</div>
                                                </div>
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_838572481" id="seatSelect_838572481">
                        </div>
						
                    </li>
                                    <li id="838587094" class="row-sec  bus_filt clearfix time_4 time_5 time_sleepertime_seater time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">TAM CHE TO NKL</div>
                                    <div class="bus-type m-top-16 l-color">1+2, Sleeper/Seater, Non-AC</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">20:45</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">08:45 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">05:30</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">400.0,SUB</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">44<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_838587094" onclick="showSeatLayout('838587094','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">View Seats</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_838587094" onclick="hideSeatLayout('838587094','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">Hide Seats</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="838587094">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">20:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Koyambedu">Koyambedu</span></li>
                                                                                           <li><span class="time">21:05</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stand">Bus Stand</span></li>
                                                                                           <li><span class="time">21:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Court">Near Court</span></li>
                                                                                           <li><span class="time">21:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">21:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">21:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp To Hindu Misson Hospital">Opp To Hindu Misson Hospital</span></li>
                                                                                           <li><span class="time">22:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stand">Bus Stand</span></li>
                                                                                           <li><span class="time">22:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Cresent College">Near Cresent College</span></li>
                                                                                           <li><span class="time">22:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Toll Gate">Near Toll Gate</span></li>
                                                                                           <li><span class="time">22:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">22:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">04:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stand">Bus Stand</span></li>
                                                                                           <li><span class="time">05:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Alanganatham Pirivu">Alanganatham Pirivu</span></li>
                                                                                           <li><span class="time">05:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Namakkal Town">Namakkal Town</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-4 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹400(100%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 4-12 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹200(50%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 12-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹80(20%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-168 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹100(25%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 168-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹60(15%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_838587094" id="seatSelect_838587094">
                        </div>
						
                    </li>
                                    <li id="838610534" class="row-sec  bus_filt clearfix time_4 time_6 time_sleeper time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">S R T</div>
                                    <div class="bus-type m-top-16 l-color">2+1, Sleeper, Non-AC, Non-Video</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">22:00</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">08:00 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">06:00</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">479.0,UB</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">20<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_838610534" onclick="showSeatLayout('838610534','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">View Seats</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_838610534" onclick="hideSeatLayout('838610534','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">Hide Seats</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val amenti">Amenities</span></li>
                                                                        <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="838610534">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">22:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">22:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Sivan Kovil Bus Stop">Sivan Kovil Bus Stop</span></li>
                                                                                           <li><span class="time">22:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Hotel Anjappar ">Hotel Anjappar </span></li>
                                                                                           <li><span class="time">22:17</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">22:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Fuel Pump Station">Fuel Pump Station</span></li>
                                                                                           <li><span class="time">22:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Stand near the main road signal">Stand near the main road signal</span></li>
                                                                                           <li><span class="time">22:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">22:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">23:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp. Hindu Mission Hospital">Opp. Hindu Mission Hospital</span></li>
                                                                                           <li><span class="time">23:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Omni Bus Stop">Omni Bus Stop</span></li>
                                                                                           <li><span class="time">23:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Vandalur Zoo ">Vandalur Zoo </span></li>
                                                                                           <li><span class="time">23:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="NH - 45">NH - 45</span></li>
                                                                                           <li><span class="time">23:59</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Toll Gate">Toll Gate</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">05:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Salem Road">Salem Road</span></li>
                                                                                           <li><span class="time">06:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stand">Bus Stand</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-6 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹479(100%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 6-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹239.5(50%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-72 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹119.75(25%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 72-168 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹47.9(10%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 168-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹47.9(10%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Emergency exit</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Fire Extinguisher</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Hammer (to break glass)</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Live Bus Tracking</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> M Ticket</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Driver/ Conductor with masks</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Extra legroom</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> No Blankets and No linen provided</span></div>
                                                	</div>
                                                </div>
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_838610534" id="seatSelect_838610534">
                        </div>
						
                    </li>
                                    <li id="838994015" class="row-sec  bus_filt clearfix time_4 time_5 time_sleeper time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">Karur seenu Travels</div>
                                    <div class="bus-type m-top-16 l-color">2+1, Sleeper, AC</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">21:30</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">07:45 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">05:15</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">820.0,SUB</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">0<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_838994015"><div class="button view-seats fr">Sold Out</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_838994015"><div class="button view-seats fr">Sold Out</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="838994015">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">21:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Omni Bus Stand,Bala Senthil Travels Shop No.50,5th Bay,Omni Bustand, Chennai.">Omni Bus Stand,Bala Senthil Travels Shop No.50,5th Bay,Omni Bustand, Chennai.</span></li>
                                                                                           <li><span class="time">21:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Sivan Kovil Bus Stop">Near Sivan Kovil Bus Stop</span></li>
                                                                                           <li><span class="time">21:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Anjappar Hotel">Near Anjappar Hotel</span></li>
                                                                                           <li><span class="time">22:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Metro Station">Near Metro Station</span></li>
                                                                                           <li><span class="time">22:05</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Alandur Court">Near Alandur Court</span></li>
                                                                                           <li><span class="time">22:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Shanthi Petrol Bunk">Near Shanthi Petrol Bunk</span></li>
                                                                                           <li><span class="time">22:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Meenambakkam Airport">Near Meenambakkam Airport</span></li>
                                                                                           <li><span class="time">22:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Hp Petrol Bunk">Near Hp Petrol Bunk</span></li>
                                                                                           <li><span class="time">22:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">22:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opposite To Hindu Mission Hospital">Opposite To Hindu Mission Hospital</span></li>
                                                                                           <li><span class="time">22:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">22:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Vandalur Zoo">Near Vandalur Zoo</span></li>
                                                                                           <li><span class="time">22:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">23:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stand">Near Bus Stand</span></li>
                                                                                           <li><span class="time">23:05</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">23:05</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">23:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">23:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Toll Gate">Near Toll Gate</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">05:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Park Road, Near Namakkal Bus Stand">Park Road, Near Namakkal Bus Stand</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before  hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹0(%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_838994015" id="seatSelect_838994015">
                        </div>
						
                    </li>
                                    <li id="839871015" class="row-sec  bus_filt clearfix time_4 time_5 time_sleeper time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">Royal Travels</div>
                                    <div class="bus-type m-top-16 l-color">2+1, Sleeper, AC, Non-Video</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">22:00</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">07:35 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">05:35</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">650.0,UB</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">26<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_839871015" onclick="showSeatLayout('839871015','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">View Seats</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_839871015" onclick="hideSeatLayout('839871015','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">Hide Seats</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="839871015">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">21:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Gateway Hotel Side, Under The Flyover, Koyambedu">Gateway Hotel Side, Under The Flyover, Koyambedu</span></li>
                                                                                           <li><span class="time">22:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Koyambedu Election  Office">Koyambedu Election  Office</span></li>
                                                                                           <li><span class="time">22:03</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Arumbakam Metro">Arumbakam Metro</span></li>
                                                                                           <li><span class="time">22:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">22:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Shree Mithai (Anjappar Hotel)">Near Shree Mithai (Anjappar Hotel)</span></li>
                                                                                           <li><span class="time">22:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop 7373111899">Near Bus Stop 7373111899</span></li>
                                                                                           <li><span class="time">22:27</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Alandur Metro">Alandur Metro</span></li>
                                                                                           <li><span class="time">22:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Court Bus Stop">Near Court Bus Stop</span></li>
                                                                                           <li><span class="time">22:33</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Shanthi Petrol Bunk">Shanthi Petrol Bunk</span></li>
                                                                                           <li><span class="time">22:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">22:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Pallavaram">Pallavaram</span></li>
                                                                                           <li><span class="time">22:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Vasantha Bhavan Hotel">Vasantha Bhavan Hotel</span></li>
                                                                                           <li><span class="time">22:47</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near (Mepz Signal )Opposite To Grt">Near (Mepz Signal )Opposite To Grt</span></li>
                                                                                           <li><span class="time">22:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp To Hindu Mission Hospital">Opp To Hindu Mission Hospital</span></li>
                                                                                           <li><span class="time">23:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Vandalur Zoo Bus Stop">Near Vandalur Zoo Bus Stop</span></li>
                                                                                           <li><span class="time">23:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Urapakkam">Urapakkam</span></li>
                                                                                           <li><span class="time">23:17</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Mani Gate">Mani Gate</span></li>
                                                                                           <li><span class="time">23:18</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Sis Safa ,Mani Gate">Sis Safa ,Mani Gate</span></li>
                                                                                           <li><span class="time">23:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">23:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Srm College">Near Srm College</span></li>
                                                                                           <li><span class="time">23:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stand">Near Bus Stand</span></li>
                                                                                           <li><span class="time">23:33</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Akshaya Metropolsis">Akshaya Metropolsis</span></li>
                                                                                           <li><span class="time">23:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Busstop">Near Busstop</span></li>
                                                                                           <li><span class="time">23:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">23:43</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Ayyappan Temple">Near Ayyappan Temple</span></li>
                                                                                           <li><span class="time">23:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Chengalpattu Toll">Chengalpattu Toll</span></li>
                                                                                           <li><span class="time">23:47</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opposite To Karpaga Vinayaga Hospital">Opposite To Karpaga Vinayaga Hospital</span></li>
                                                                                           <li><span class="time">23:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Busstop">Near Busstop</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">05:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stand">Near Bus Stand</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-4 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>No Cancellation </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 4-12 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹325(50%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 12-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹130(20%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-168 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹65(10%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 168-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹65(10%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_839871015" id="seatSelect_839871015">
                        </div>
						
                    </li>
                                    <li id="839872460" class="row-sec  bus_filt clearfix time_4 time_5 time_sleepertime_seater time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">Royal Travels</div>
                                    <div class="bus-type m-top-16 l-color">1+2, Sleeper/Seater, Non-AC, Non-Video</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">21:30</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">07:15 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">04:45</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">400.0,LB</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">29<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_839872460" onclick="showSeatLayout('839872460','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">View Seats</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_839872460" onclick="hideSeatLayout('839872460','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">Hide Seats</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="839872460">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">21:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Gateway Hotel Side, Under The Flyover, Koyambedu">Gateway Hotel Side, Under The Flyover, Koyambedu</span></li>
                                                                                           <li><span class="time">21:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Koyambedu Election  Office">Koyambedu Election  Office</span></li>
                                                                                           <li><span class="time">21:33</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Arumbakam Metro">Arumbakam Metro</span></li>
                                                                                           <li><span class="time">21:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">21:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Shree Mithai (Anjappar Hotel)">Near Shree Mithai (Anjappar Hotel)</span></li>
                                                                                           <li><span class="time">21:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">22:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Court Busstop">Near Court Busstop</span></li>
                                                                                           <li><span class="time">22:02</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Petrol Bunk">Near Petrol Bunk</span></li>
                                                                                           <li><span class="time">22:05</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">22:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stand">Near Bus Stand</span></li>
                                                                                           <li><span class="time">22:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">22:27</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near (Mepz Signal )Opposite To Grt">Near (Mepz Signal )Opposite To Grt</span></li>
                                                                                           <li><span class="time">22:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp Hindu Mission Hospital">Opp Hindu Mission Hospital</span></li>
                                                                                           <li><span class="time">22:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Vandalur Zoo Bus Stop">Near Vandalur Zoo Bus Stop</span></li>
                                                                                           <li><span class="time">22:48</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">22:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Mani Gate">Mani Gate</span></li>
                                                                                           <li><span class="time">22:52</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Sis Safa ,Mani Gate">Sis Safa ,Mani Gate</span></li>
                                                                                           <li><span class="time">22:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">23:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Srm College">Near Srm College</span></li>
                                                                                           <li><span class="time">23:05</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stand">Near Bus Stand</span></li>
                                                                                           <li><span class="time">23:07</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Akshaya Metropolsis">Akshaya Metropolsis</span></li>
                                                                                           <li><span class="time">23:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Busstop">Near Busstop</span></li>
                                                                                           <li><span class="time">23:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stop">Near Bus Stop</span></li>
                                                                                           <li><span class="time">23:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Chengalpattu Toll">Chengalpattu Toll</span></li>
                                                                                           <li><span class="time">23:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Ayyappan Temple">Near Ayyappan Temple</span></li>
                                                                                           <li><span class="time">23:37</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opposite To Karpaga Vinayaga Hospital">Opposite To Karpaga Vinayaga Hospital</span></li>
                                                                                           <li><span class="time">23:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Busstop">Near Busstop</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">04:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Bus Stop">Bus Stop</span></li>
                                                                                           <li><span class="time">04:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Bus Stand">Near Bus Stand</span></li>
                                                                                           <li><span class="time">04:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Namakkal Toll Gate">Near Namakkal Toll Gate</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-4 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>No Cancellation </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 4-12 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹200(50%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 12-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹80(20%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-168 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹40(10%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 168-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹40(10%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_839872460" id="seatSelect_839872460">
                        </div>
						
                    </li>
                                    <li id="848967785" class="row-sec  bus_filt clearfix time_4 time_5 time_sleeper time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">NATIONAL TRAVELS (CHN)</div>
                                    <div class="bus-type m-top-16 l-color">2+1, Bharath Benz Sleeper, AC, Individual LED</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">22:00</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">07:45 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">05:45</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">649.0,UB</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">19<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_848967785" onclick="showSeatLayout('848967785','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">View Seats</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_848967785" onclick="hideSeatLayout('848967785','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">Hide Seats</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val amenti">Amenities</span></li>
                                                                        <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="848967785">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">22:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Shop No.10, Platform No.1, Omnibus Terminus">Shop No.10, Platform No.1, Omnibus Terminus</span></li>
                                                                                           <li><span class="time">22:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Cmbt Bus Terminus(Opp)">Cmbt Bus Terminus(Opp)</span></li>
                                                                                           <li><span class="time">22:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Vadapalani Bus Stop">Near Vadapalani Bus Stop</span></li>
                                                                                           <li><span class="time">22:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Shree Mithai, Old Anjappar Hotel">Shree Mithai, Old Anjappar Hotel</span></li>
                                                                                           <li><span class="time">22:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Ekkaduthangal Bus Stop">Ekkaduthangal Bus Stop</span></li>
                                                                                           <li><span class="time">22:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Guindy(Alandur Court Opp )">Guindy(Alandur Court Opp )</span></li>
                                                                                           <li><span class="time">22:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Shanthi Petrol Bunk">Near Shanthi Petrol Bunk</span></li>
                                                                                           <li><span class="time">22:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Pvr Cinemas">Pvr Cinemas</span></li>
                                                                                           <li><span class="time">22:53</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Pallavaram Bus Stop">Pallavaram Bus Stop</span></li>
                                                                                           <li><span class="time">23:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Chrompet  Bus Stop">Chrompet  Bus Stop</span></li>
                                                                                           <li><span class="time">23:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp Hindu Mission Hospitol">Opp Hindu Mission Hospitol</span></li>
                                                                                           <li><span class="time">23:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Sri Ram Gate Way">Sri Ram Gate Way</span></li>
                                                                                           <li><span class="time">23:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Vandalur Zoo Bus Stop">Near Vandalur Zoo Bus Stop</span></li>
                                                                                           <li><span class="time">23:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Tea Kada Bus Stop">Tea Kada Bus Stop</span></li>
                                                                                           <li><span class="time">23:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Guduvancheri  Bus Stop">Guduvancheri  Bus Stop</span></li>
                                                                                           <li><span class="time">23:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Srm College">Near Srm College</span></li>
                                                                                           <li><span class="time">23:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Mahendhra City Bus Stop">Mahendhra City Bus Stop</span></li>
                                                                                           <li><span class="time">23:59</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Chengalpatu Toll Gate">Chengalpatu Toll Gate</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">05:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Kulakkarai,Park Road Namakkal">Kulakkarai,Park Road Namakkal</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-4 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹649(100%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 4-12 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹324.5(50%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 12-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹129.8(20%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-168 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹97.35(15%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 168-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹64.9(10%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Blankets</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Charging Point</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Emergency exit</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Fire Extinguisher</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Hammer (to break glass)</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Live Bus Tracking</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Pillow</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> WiFi</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> CC Camera</span></div>
                                                	</div>
                                                </div>
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_848967785" id="seatSelect_848967785">
                        </div>
						
                    </li>
                                    <li id="848970852" class="row-sec  bus_filt clearfix time_4 time_6 time_sleeper time_ac" style="">
                    	<div class="clearfix bus-item">
                           <div class="clearfix bus-item-details">
                              <div class="clearfix row-one">
                                 <div class="column-two p-right-10 w-40 fl">
                                    <div class="travels lh-24 f-bold d-color">NATIONAL TRAVELS (CHN)</div>
                                    <div class="bus-type m-top-16 l-color">2+1, Bharath Benz Sleeper, AC, Individual LED</div>
                                 </div>
                                 <div class="column-three p-right-10 w-10 fl timedur">
                                    <div class="dp-time f-14 d-color f-bold">23:15</div>
                                    <!--<div class="dp-loc m-top-16 l-color w-wrap f-12" title="Koyambedu">Koyambedu</div>-->
                                 </div>
                                 <div class="column-four p-right-10 w-10 fl timedur">
                                    <div class="dur l-color lh-24">07:45 hrs</div>
                                    <!--<div class="rsStop m-top-16 l-color w-wrap f-12"><span class="icon-reststop"></span><span> 1</span> <span> Rest Stop</span> </div>-->
                                 </div>
                                 <div class="column-five p-right-10 w-10 fl timedur">
                                    <div class="bp-time f-14 d-color f-bold">07:00</div>
                                    <!--<div class="bp-loc m-top-16 l-color w-wrap f-12" title="Trichy">Trichy</div>-->
                                 </div>
                                 <!--<div class="column-six p-right-10 w-10 fl">
                                    <div class="rating-sec lh-24">
                                       <div class="lh-18 rating rat-green">4.7</div>
                                    </div>
                                    <div class="no-ppl m-top-10 l-color"><i class="icon d-block icon-rating_ppl"></i>721</div>
                                 </div>-->
                                 <div class="column-seven p-right-10 w-15 fl">
                                    <div class="seat-fare">
                                    <div class="starts">Starts from </div>
                                       <div class="fare d-block"><i class="fa fa-inr" aria-hidden="true"></i> <span class="f-14 f-bold">699.0,UB</span></div>
                                        
                                    </div>
                                 </div>
                                 <div class="column-eight w-15 fl">

                                    <div class="seat-left">7<span class="l-color"> Seats available</span></div>
                                    <!--<div class="window-left m-top-16">13 <span class="l-color"> Window</span></div>-->
                                 </div>
                              </div>
                              <!--<div class="clearfix row-two m-top-10 ">
                                 <div class="amenities-icon fl">
                                       <ul>
                                          <li class="d-block" title="WIFI"><i class="icon icon-am_1 d-block"></i></li>
                                          <li class="d-block" title="Water Bottle"><i class="icon icon-am_4 d-block"></i></li>
                                          <li class="d-block" title="Blankets"><i class="icon icon-am_5 d-block"></i></li>
                                          <li class="d-block" title="Charging Point"><i class="icon icon-am_7 d-block"></i></li>
                                       </ul>
                                  </div>
                                 <div class="hero-feature fl clearfix"><span class="txt-block"><i class="icon icon-addfil_0 fl icon-addfil_2"></i><span class="d-color">Live Tracking</span></span></div>
                              </div>-->
                           </div>
                           <div class="clearfix m-top-16 viewseateer">
                              <a href="javascript:void(0);" class="btnab book1_show" id="showseats_848970852" onclick="showSeatLayout('848970852','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">View Seats</div></a>
                              <a href="javascript:void(0);" style="display:none;" class="btnab book1_hide" id="hideseats_848970852" onclick="hideSeatLayout('848970852','Chennai','Namakkal','2023-10-10');"><div class="button view-seats fr">Hide Seats</div></a>

							  <div>
                                 <ul class="fr bottom-panel d-color   ">
                                                                         <li class="amenties b-p-list"><span class="txt-val amenti">Amenities</span></li>
                                                                        <li class="amenties b-p-list"><span class="txt-val boardings"><input type="hidden" id="routeid" value="848970852">Boarding &amp; Dropping Points</span></li>
                                    <!--<li class="amenties b-p-list"><span class="txt-val ">Reviews</span></li>-->
                                    <li class="amenties b-p-list"><span class="txt-val policies">Cancellation Policy</span></li>
                                 </ul>
                                 <div class="clearfix"></div>
                                 <div class="panels-container boards" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="fl w-50">
                                        	<h4>BOARDING POINT</h4>
                                        	
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">21:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Infront Of Indian Bank, Opp: Baby Nagar Hot Chips">Infront Of Indian Bank, Opp: Baby Nagar Hot Chips</span></li>
                                                                                           <li><span class="time">21:05</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Tharamani Near Srt Tools">Tharamani Near Srt Tools</span></li>
                                                                                           <li><span class="time">21:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Taramani (100ft Road)">Taramani (100ft Road)</span></li>
                                                                                           <li><span class="time">21:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="At Srp Tools Busstop Infront Of Holiday Inn">At Srp Tools Busstop Infront Of Holiday Inn</span></li>
                                                                                           <li><span class="time">21:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Perungudi Life Line Hospital">Perungudi Life Line Hospital</span></li>
                                                                                           <li><span class="time">21:38</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Kandanchavadi Busstop">Kandanchavadi Busstop</span></li>
                                                                                           <li><span class="time">21:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Perungudi Toll Gate">Perungudi Toll Gate</span></li>
                                                                                           <li><span class="time">21:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="At Thuraipakkam Jain College Busstop,">At Thuraipakkam Jain College Busstop,</span></li>
                                                                                           <li><span class="time">21:48</span><span class="loc" data-toggle="tooltip" title="" data-original-title="At Mettukuppam Busstop">At Mettukuppam Busstop</span></li>
                                                                                           <li><span class="time">21:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Ptc Quarters Busstop">Ptc Quarters Busstop</span></li>
                                                                                           <li><span class="time">21:52</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Okkiyampet (Dindigul Briyani)">Okkiyampet (Dindigul Briyani)</span></li>
                                                                                           <li><span class="time">21:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Karapakkam Bus Stop, Opp To Aravind Theatre">Karapakkam Bus Stop, Opp To Aravind Theatre</span></li>
                                                                                           <li><span class="time">22:00</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Shollinganallur (Accenture)">Shollinganallur (Accenture)</span></li>
                                                                                           <li><span class="time">22:05</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Infront Of Mohammed Sathak College Gate">Infront Of Mohammed Sathak College Gate</span></li>
                                                                                           <li><span class="time">22:07</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Shollinganallur (Hcl Gate)">Shollinganallur (Hcl Gate)</span></li>
                                                                                           <li><span class="time">22:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Perumbakkam (Advent Church)  Bus Stop">Perumbakkam (Advent Church)  Bus Stop</span></li>
                                                                                           <li><span class="time">22:15</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Pandiaashotel Entrence Medavakkam High Road 8939440669">Pandiaashotel Entrence Medavakkam High Road 8939440669</span></li>
                                                                                           <li><span class="time">22:20</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Santhosapuram Busstop">Santhosapuram Busstop</span></li>
                                                                                           <li><span class="time">22:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Gowrivakkam (Sivet Busstop)">Gowrivakkam (Sivet Busstop)</span></li>
                                                                                           <li><span class="time">22:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="At Sembakkam Busstop">At Sembakkam Busstop</span></li>
                                                                                           <li><span class="time">22:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Kamarajapuram Busstop">Kamarajapuram Busstop</span></li>
                                                                                           <li><span class="time">22:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Rajakilpakkam (Shell Fuel Station)">Rajakilpakkam (Shell Fuel Station)</span></li>
                                                                                           <li><span class="time">22:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Camp Road (Csi Church)">Camp Road (Csi Church)</span></li>
                                                                                           <li><span class="time">22:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Selaiyur (Corporation School)">Selaiyur (Corporation School)</span></li>
                                                                                           <li><span class="time">22:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Mcc College Bus Stop">Mcc College Bus Stop</span></li>
                                                                                           <li><span class="time">23:10</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Opp Hindu Mission Hospitol">Opp Hindu Mission Hospitol</span></li>
                                                                                           <li><span class="time">23:25</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Sri Ram Gate Way">Sri Ram Gate Way</span></li>
                                                                                           <li><span class="time">23:30</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Vandalur Zoo Bus Stop">Near Vandalur Zoo Bus Stop</span></li>
                                                                                           <li><span class="time">23:35</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Tea Kada Bus Stop">Tea Kada Bus Stop</span></li>
                                                                                           <li><span class="time">23:40</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Guduvancheri  Bus Stop">Guduvancheri  Bus Stop</span></li>
                                                                                           <li><span class="time">23:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Near Srm College">Near Srm College</span></li>
                                                                                           <li><span class="time">23:50</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Mahendhra City Bus Stop">Mahendhra City Bus Stop</span></li>
                                                                                           <li><span class="time">23:55</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Chengalpatu Toll Gate">Chengalpatu Toll Gate</span></li>
                                                                                        </ul>
                                        </div>
                                        <div class="fl w-50">
                                        	<h4>DROPPING POINT</h4>
                                            <ul class="bpdplist clearfix">
                                                                                           <li><span class="time">05:45</span><span class="loc" data-toggle="tooltip" title="" data-original-title="Kulakkarai,Park Road Namakkal">Kulakkarai,Park Road Namakkal</span></li>
                                                                                        </ul>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container can-pol" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                        	<div>
                                            <div class="cancel-policy-col-name">
                                            	<div class="fl">Cancellation Time</div>
                                            	<div class="fr">Cancellation Charges</div>
                                            	<div class="clearfix m-t-32">
                                            		<table class="cp-table" border="1" bordercolor="#dddddd" width="515">
                                            		                                                 			<tbody><tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 0-4 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹699(100%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 4-12 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹349.5(50%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 12-24 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹139.8(20%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 24-168 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹104.85(15%) </b> </td>
                                            			</tr>
                                            			                                            			<tr class="bg-color-fff5e5">
                                            				<td class="td-cancellation-string">Before 168-720 hours</td>
                                            				<td class="td-cancellation-charges bg-color-fff5e5"><b>₹69.9(10%) </b> </td>
                                            			</tr>
                                            			                                            		</tbody></table>
                                            	</div>
                                            </div>
                                            
                                            </div>
                                           
                                        </div>
                                    </div>
                                 </div>
                                 <div class="panels-container ame-poi" style="display:none;">
                                 	<div class="clearfix">
                                    	<div class="cancel-wrapper">
                                            <div class="cancel-panel-container cancel-wrapper">
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Blankets</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Charging Point</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Emergency exit</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Fire Extinguisher</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Hammer (to break glass)</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Live Bus Tracking</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> Pillow</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> WiFi</span></div>
                                                	</div>
                                                </div>
                                                                                         	<div class="clearfix row">
                                            		<div>
                                                        <div class="fl row-list first-col"><span> CC Camera</span></div>
                                                	</div>
                                                </div>
                                                                                        </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="seat-container-wrapper seatSelect_848970852" id="seatSelect_848970852">
                        </div>
						
                    </li>
                                </ul>
            </div>
        </div>
    </div>
	<div class="hide" id="page_overlay"></div>
	<div class="custinfo slidein main_result" data-view="custinfoView" style="display:none;">

	</div>
	

</div>
</div>
<?php include 'footer.php' ?>
