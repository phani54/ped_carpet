<?php 

session_start();
require "lib/config.php";

?>
    <!--Header Start-->
    <?php include 'header.php'; ?>

        <!--Header End-->

        <div class="slider-bg">
            <!-- Banner start-->
            <div alt="">
			
			<div class="we-po-head hidden-xs">
				<img src="assets/images/couple-dancing.png" class="img-responsive"/>
			</div>
				<video autoplay muted loop id="myVideo">
				  <source src="assets/images/marriage1.mp4" type="video/mp4">
				</video>
			
			</div>

            <div class="find-section">
                <!-- Find search section-->
                <div class="container">
                    <div class="row">
                       <div class="finder-caption" style="display: initial;">
                                
								
								 <div class="col-md-offset-2 col-md-8 col-sm-12 col-xs-12 finder-block">
                            
                            <div class="finder-form-transparent text-left"  style="margin-top: 0px!important;">
                                <h2 class="tagline-mobile" style="font-family: 'Pacifico', cursive; font-weight: 300; text-shadow: #000 0px 0px 8px;">Perfect place for your perfect match! </h2>
                                <form name="login" method="get" action="<?php echo URL_VIEW;?>search_result.php">
                                    <div class="row">
                                        <div class="search-section">
                                            <div class="form-group col-md-3 col-sm-3 col-xs-12 no-padding land-lookingfor">
                                                <select name="looking_for" id="Looking" class="custom-select sources" placeholder="Looking for a">
                                                    <option value="female" title="Bride" selected>Bride</option>
                                                    <option value="male" title="Groom">Groom</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2 col-sm-2 col-xs-6 no-padding land-agefrom agefromto_mob-w">
                                                <select name="age_from" id="agefrom" class="custom-select sources" placeholder="Age from">
													<?php 
														for($i=18; $i <= 70; $i++){
															echo '<option ';
															if($i == 20) {
																echo 'selected="" ';
															}
															echo 'value="'.$i.'" title="'.$i.' yrs">'.$i.' yrs </option>';
														}
													?>                                                   
                                                </select>
                                            </div>
                                            <div class="col-xs-2 agetolabel">
                                                <p>to</p>
                                            </div>
                                            <div class="form-group col-md-2 col-sm-2 col-xs-6 no-padding land-ageto agefromto_mob-w">
                                                <select name="age_to" id="ageto" class="custom-select sources" placeholder="Age to">

                                                    <?php 
														for($i=18; $i <= 70; $i++){
															echo '<option ';
															if($i == 25) {
																echo 'selected="" ';
															}
															echo 'value="'.$i.'" title="'.$i.' yrs">'.$i.' yrs </option>';
														}
													?> 
                                                </select>
                                            </div>
                                            <div class="form-group col-md-3 col-sm-3 col-xs-12 no-padding land-religion">
                                                <select name="religion" id="religion" class="custom-select sources" placeholder="Select Religion">
                                                    <option class="list" value='' title="">Doesn't matter</option>
													<?php 
													$rth = $db->query('SELECT * FROM `religions` ORDER BY `name` ASC');
													while($rrow = $rth->fetch()){
														echo '<option ';
														echo 'value="'.$rrow['guid'].'">'.$rrow['name'].'</option>';
													}
													?>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-2 col-sm-2 col-xs-12 no-padding land-search">
                                                <button name="search" value="profile_search" type="submit" class="btn bor-rmd btn-lg btn-block ripplelink" id="HP_Search_Now">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
								
								
                            </div>
                    </div>
                </div>
            </div>
            <!-- /.Find search section-->
        </div>
		<div class="about_section">
		<div class="container">
			<h2 class="wthree_title_agile"><span>H</span>appy <span>S</span>tories</h2>
			<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
				  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="2"></li>
				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="active item">
				    	
			<div class="inner_w3l_agile_grids">
				<!-- Bottom to top-->
				<div class="col-md-5 team-grid">
					<!-- normal -->
					<div class="ih-item circle effect10 bottom_to_top">
						<div class="img"><img src="assets/images/a2.png"></div>
					</div>
					<!-- end normal -->
					<p>I am very much thankful to redcarpetmatrimony.com for gifting me a partner for the life time.</p>
					
				</div>
				<div class="col-md-2 team-grid">
					<!-- normal -->
					<div class="info1">
						<h3>Vikram</h3>
						<div class="arrow-container animated fadeInDown">
							<a href="#home" class="arrow-2 scroll">
							<i class="fa fa-heart-o" aria-hidden="true"></i>
						</a>
							
						</div>
						<h4>Reet</h4>
					</div>
				</div>
				<div class="col-md-5 team-grid">
					<!-- normal -->
					<div class="ih-item circle effect10 bottom_to_top">
						<div class="img"><img src="assets/images/a1.png" alt="img"></div>
					</div>
					<!-- end normal -->
					<p> I belong to Sindhi community and wanted a match from the same caste and same city Vadodara. </p>
					
				</div>
				<div class="clearfix"></div>
			</div>
			
						
				    </div>
				    <div class="item">
				    	
			<div class="inner_w3l_agile_grids">
				<!-- Bottom to top-->
				<div class="col-md-5 team-grid">
					<!-- normal -->
					<div class="ih-item circle effect10 bottom_to_top">
						<div class="img"><img src="assets/images/a3.png"></div>
					</div>
					<!-- end normal -->
					<p>I am very much thankful to redcarpetmatrimony.com for gifting me a partner for the life time.</p>
					
				</div>
				<div class="col-md-2 team-grid">
					<!-- normal -->
					<div class="info1">
						<h3>Mayuri</h3>
						<div class="arrow-container animated fadeInDown">
							<a href="#home" class="arrow-2 scroll">
							<i class="fa fa-heart-o" aria-hidden="true"></i>
						</a>
							
						</div>
						<h4>Bharat</h4>
					</div>
				</div>
				<div class="col-md-5 team-grid">
					<!-- normal -->
					<div class="ih-item circle effect10 bottom_to_top">
						<div class="img"><img src="assets/images/a4.png" alt="img"></div>
					</div>
					<!-- end normal -->
					<p> I belong to Sindhi community and wanted a match from the same caste and same city Vadodara. </p>
					
				</div>
				<div class="clearfix"></div>
			</div>
			
						
						
				    </div>
				    <div class="item">
				    	
			<div class="inner_w3l_agile_grids">
				<!-- Bottom to top-->
				<div class="col-md-5 team-grid">
					<!-- normal -->
					<div class="ih-item circle effect10 bottom_to_top">
						<div class="img"><img src="assets/images/a5.png"></div>
					</div>
					<!-- end normal -->
					<p>I am very much thankful to redcarpetmatrimony.com for gifting me a partner for the life time.</p>
					
				</div>
				<div class="col-md-2 team-grid">
					<!-- normal -->
					<div class="info1">
						<h3>Darshak</h3>
						<div class="arrow-container animated fadeInDown">
							<a href="#home" class="arrow-2 scroll">
							<i class="fa fa-heart-o" aria-hidden="true"></i>
						</a>
							
						</div>
						<h4>Ruchi</h4>
					</div>
				</div>
				<div class="col-md-5 team-grid">
					<!-- normal -->
					<div class="ih-item circle effect10 bottom_to_top">
						<div class="img"><img src="assets/images/a6.png" alt="img"></div>
					</div>
					<!-- end normal -->
					<p> I belong to Sindhi community and wanted a match from the same caste and same city Vadodara. </p>
					
				</div>
				<div class="clearfix"></div>
			</div>	
				    </div>
				  </div>
				</div>	
		</div>
		
	</div>
        <div class="section-space40 bg-light">
            <div class="container">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="section-title mb30 text-center">
                                <h2>Brides and Grooms Photo Profiles</h2>
                                <p>Search your perfect life-partner from millions of profiles.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 discover-grid">
                            <ul id="tabs">

                                <li><a href="#Bride" class="current">Bride</a></li>
                                <li><a href="#Groom">Groom</a></li>

                            </ul>
                            <div id="Bride" class="tab-section">
                                <div id="shadow"></div>
                                <div class="clearfix">&nbsp;</div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                        <div class="matches-holder">
                                            <span class="profile_viewed"></span>
                                            <a href="#">
                                                <img class="pinkprofileimage" src="assets/images/bride_1.jpg"> </a>
                                            <div class="profile-name">
                                                RCM50051 </div>
                                            <div class="info-holder">
                                                <span>24</span>
                                                <span>160cm - 5ft 3in</span>

                                                <span>Vijayawada</span> </div>
                                            <div class="gallery">
                                                <a href="#">
                                                    <button class="btn yellow-hollow position-relative" id="showview-626907"><span class="view-full-profile"></span><span class="text">VIEW</span></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                        <div class="matches-holder">
                                            <span class="profile_viewed"></span>

                                            <a href="#">
                                                <img class="pinkprofileimage" src="assets/images/bride_2.jpg"> </a>
                                            <div class="profile-name">
                                                RCM50088 </div>
                                            <div class="info-holder">
                                                <span>33</span>
                                                <span>167cm - 5ft 6in</span>

                                                <span>Machilipatnam</span> </div>
                                            <div class="gallery">

                                                <a href="#">

                                                    <button class="btn yellow-hollow position-relative" id="showview-623933"><span class="view-full-profile"></span><span class="text">VIEW</span></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                        <div class="matches-holder">
                                            <span class="profile_viewed"></span>

                                            <a href="#">
                                                <img class="pinkprofileimage" src="assets/images/bride_3.jpg"> </a>
                                            <div class="profile-name">
                                                RCM50055 </div>
                                            <div class="info-holder">
                                                <span>29</span>
                                                <span>157cm - 5ft 2in</span>

                                                <span>Hyderabad</span> </div>
                                            <div class="gallery">

                                                <a href="#">

                                                    <button class="btn yellow-hollow position-relative" id="showview-621625"><span class="view-full-profile"></span><span class="text">VIEW</span></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                        <div class="matches-holder">
                                            <span class="profile_viewed"></span>

                                            <a href="#">
                                                <img class="pinkprofileimage" src="assets/images/bride_4.jpg"> </a>
                                            <div class="profile-name">
                                                RCM50019 </div>
                                            <div class="info-holder">
                                                <span>26</span>
                                                <span>152cm - 5ft</span>

                                                <span>Hyderabad</span> </div>
                                            <div class="gallery">

                                                <a href="#">

                                                    <button class="btn yellow-hollow position-relative" id="showview-619354"><span class="view-full-profile"></span><span class="text">VIEW</span></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <ul class="pagination" id="pagination">
                                </ul>

                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 discover-grid">
                            <div id="Groom" class="tab-section" style="display:block;">

                                <div class="clearfix">&nbsp;</div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                        <div class="matches-holder">
                                            <span class="profile_viewed"></span>

                                            <a href="#">
                                                <img class="pinkprofileimage" src="assets/images/groom_1.jpg"> </a>
                                            <div class="profile-name">
                                                RCM50030 </div>
                                            <div class="info-holder">
                                                <span>30</span>
                                                <span>172cm - 5ft 8in</span>

                                                <span>Hyderabad</span> </div>
                                            <div class="gallery">

                                                <a href="#">

                                                    <button class="btn yellow-hollow position-relative" id="showview-626516"><span class="view-full-profile"></span><span class="text">VIEW</span></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                        <div class="matches-holder">
                                            <span class="profile_viewed"></span>

                                            <a href="#">
                                                <img class="pinkprofileimage" src="assets/images/groom_2.jpg"> </a>
                                            <div class="profile-name">
                                                RCM50072 </div>
                                            <div class="info-holder">
                                                <span>26</span>
                                                <span>165cm - 5ft 5in</span>

                                                <span>Anantapur</span> </div>
                                            <div class="gallery">

                                                <a href="#">

                                                    <button class="btn yellow-hollow position-relative" id="showview-625952"><span class="view-full-profile"></span><span class="text">VIEW</span></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                        <div class="matches-holder">
                                            <span class="profile_viewed"></span>

                                            <a href="#">
                                                <img class="pinkprofileimage" src="assets/images/groom_3.jpg"> </a>
                                            <div class="profile-name">
                                                RCM50066 </div>
                                            <div class="info-holder">
                                                <span>29</span>
                                                <span>177cm - 5ft 10in</span>

                                                <span>Guntur</span> </div>
                                            <div class="gallery">

                                                <a href="#">

                                                    <button class="btn yellow-hollow position-relative" id="showview-625288"><span class="view-full-profile"></span><span class="text">VIEW</span></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                                        <div class="matches-holder">
                                            <span class="profile_viewed"></span>

                                            <a href="#">
                                                <img class="pinkprofileimage" src="assets/images/groom_4.jpg"> </a>
                                            <div class="profile-name">
                                                RCM50061 </div>
                                            <div class="info-holder">
                                                <span>32 </span>
                                                <span>177cm - 5ft 10in</span>

                                                <span>Karimnagar</span> </div>
                                            <div class="gallery">

                                                <a href="#">

                                                    <button class="btn yellow-hollow position-relative" id="showview-625045"><span class="view-full-profile"></span><span class="text">VIEW</span></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <ul class="pagination" id="pagination">
                                </ul>

                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 mt30 text-center"> <a href="membership.html" class="btn btn-blue bor-r50 btn-big ripplelink" id="HP_Membership_CTA">View More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="someone-special">
            <h1 class="text-center white-text" style="font-size: 36px;">Why Redcarpet Matrimony ?</h1>
            <div class="row wrapper">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="steps-holder">
                        <div>
                            <span class="step_1"></span>
                            <span class="steps">1</span>
                        </div>
                    </div>
                    <h3 class="white-text">100% Trustworthy</h3>
                    <p>
                        We are highly authentic, 100% trustworthy matrimonial platform. We follow multi-level authentication to ensure genuine profiles.
                    </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="steps-holder">
                        <div>
                            <span class="step_2"></span>
                            <span class="steps">2</span>
                        </div>
                    </div>
                    <h3 class="white-text">Higher Authentication</h3>
                    <p>
                        Higher level of verification to keep fake users at bay. We authenticate Aadhaar Card Number through UIDAI to ensure credibility of members.
                    </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="steps-holder">
                        <div>
                            <span class="step_3"></span>
                            <span class="steps">3</span>
                        </div>
                    </div>
                    <h3 class="white-text">Better Search & Matches</h3>
                    <p>
                        Better search results & matches based on your preferences. Search the desired profiles without any hassle & get relevant matches.
                    </p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 text-center">
                    <div class="steps-holder">
                        <div>
                            <span class="step_4"></span>
                            <span class="steps">4</span>
                        </div>
                    </div>
                    <h3 class="white-text">Explore & Connect</h3>
                    <p>
                        Explore and connect anytime, anywhere with registered users at your ease. Get access to unlimited profiles & share interest with the one you like.
                    </p>
                </div>
            </div>
        </section>

      <?php require 'footer.php'; ?> 
	<?php require 'popup.php'; ?>
	<script type="text/javascript">
		$(document).ready(function(ev) {
			$('#custom_carousel').on('slide.bs.carousel', function(evt) {
				$('#custom_carousel .controls li.active').removeClass('active');
				$('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
			})
		});
		$(document).ready(function() {
			$('.tab-section').hide();
			$('#tabs a').click(function(event) {
				$('#tabs a.current').removeClass('current');
				$('.tab-section:visible').hide();
				$(this.hash).show();
				$(this).addClass('current');
				event.preventDefault();
			}).filter(':first').click();

		});
	</script>
</body>

</html>