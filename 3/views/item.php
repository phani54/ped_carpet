<!doctype html>
<html lang=''>
	<head>
		<title>Gowns4Rent</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo IURL ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo IURL ?>assets/css/styles.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<script src="<?php echo IURL ?>assets/js/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="<?php echo IURL ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo IURL ?>assets/js/script.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo IURL ?>assets/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo IURL ?>assets/slick/slick-theme.css"/>
		<link href="<?php echo IURL ?>assets/dist/css/flags.css" rel="stylesheet">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		
		
		<script src='js/jquery.elevatezoom.js'></script>
		
	</head>
	<!--body onload="myFunction()"-->
	<body>
		<div class="header">
			<div class="head" style="background: url(images/menu-bg.jpg);">
				<div class="container">
					<div class="col-xs-4 no-padd">
						<div id='cssmenu'>
							<ul>
							   <li class='has-sub'><a href='javascript:;'>Dresses</a>
								  <ul>
									 <li><a href='javascript:;'>View All</a></li>
									 <li><a href='javascript:;'>Most Popular</a></li>
									 <li><a href='javascript:;'>Gowns</a></li>
									 <li><a href='javascript:;'>Cocktail</a></li>
									 <li><a href='javascript:;'>Weddings</a></li>
									 <li><a href='javascript:;'>Traditional</a></li>
									 <li><a href='javascript:;'>Night Out</a></li>
									 <li><a href='javascript:;'>Plus Size</a></li>
								  </ul>
							   </li>
							   <li class='has-sub'><a href='javascript:;'>Accessories</a>
								  <ul>
									 <li><a href='javascript:;'>View All</a></li>
									 <li><a href='javascript:;'>Bags</a></li>
									 <li><a href='javascript:;'>Necklaces</a></li>
									 <li><a href='javascript:;'>Bracelet and Bangles</a></li>
									 <li><a href='javascript:;'>Others</a></li>
								  </ul>
							   </li>
							   <li class='has-sub'><a href='javascript:;'>Stores</a>
								  <ul>
									 <li><a href='javascript:;'>Orchard-Singapore</a></li>
									 <li><a href='javascript:;'>Delhi-India</a></li>
									 <li><a href='javascript:;'>Mumbai-India</a></li>
									 <li><a href='javascript:;'>Hyderabud-India</a></li>
									 <li><a href='javascript:;'>Shanghai-China</a></li>
									 <li><a href='javascript:;'>Beijing-China</a></li>
									 <li><a href='javascript:;'>Suzhou-China</a></li>
								  </ul>
							   </li>
							   <li><a href='javascript:;'>Editorial</a></li>
							</ul>
						</div>
					</div>
					<!--div class="col-xs-4 hidden-sm hidden-md hidden-lg" align="center"><a href="<?php echo URL ?>home/"><img src="<?php echo IURL ?>assets/images/logo1.png" class="img-responsive"></a></div-->
					<div class="col-xs-4" align="center"><a href="<?php echo URL ?>home/"><img src="<?php echo IURL ?>assets/images/logo.png" width="110" class="img-responsive logo-sty"></a></div>
					<div class="col-xs-4 sign-menu">
                     <?php require("pages/side-menu.php"); ?>
					</div>
					
				</div>
			</div>
		</div>
		
		<section>
			<article>
				<div class="banner">
					
				</div>
				
				<div class="search" style="margin-top:90px; display:none; position:relative;">
				  <div class="col-sm-12 col-md-8 col-md-offset-2 hidden-xs">
					<div class="input-group">
					  <input type="text" class="form-control" aria-label="..." placeholder="Where is your special occassion?">
					  
					  <div class="input-group-btn">
						<button data-toggle="dropdown" id="flagstrap-drop-down-Em6Z0dg5" class="btn btn-default btn-md dropdown-toggle bnt-h"><span class="flagstrap-selected-Em6Z0dg5">Language</span><span class="caret" style="margin-left: 10px;"></span></button>
						<ul id="flagstrap-drop-down-Em6Z0dg5-list" aria-labelled-by="flagstrap-drop-down-Em6Z0dg5" class="dropdown-menu" style="height: auto; max-height: 250px; overflow-x: hidden;">
							<li><a data-val="SG"><i class="flagstrap-icon flagstrap-cn" style="margin-right: 10px;"></i>China</a></li>
							<li><a data-val="US"><i class="flagstrap-icon flagstrap-us" style="margin-right: 10px;"></i>United States</a></li>
						</ul>
					  </div><!-- /btn-group -->
					  <!-- /btn-group -->
					  <div class="input-group-btn">
						  <button class="btn btn-default dropdown-toggle bnt-h" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Location
							<span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><input type="text" placeholder="Enter Keyword" class="form-control" style="height:34px; background:white; padding:0px 4px 0px 4px; width:100%;"></li>
							<li><a href="#">Unites States</a></li>
							<li><a href="#">Chinese</a></li>
						  </ul>
					  </div><!-- /btn-group -->
					  <div class="input-group-btn">
						  
						  <button class="btn btn-default dropdown-toggle bnt-h" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							$ Currency
							<span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="#">US$</a></li>
							<li><a href="#">S$</a></li>
							<li><a href="#">RMB</a></li>
							<li><a href="#">IDR</a></li>
						  </ul>
						  
						<button type="button" class="btn btn-danger bnt-h">Search</button>
					  </div>
					</div>
					  
					<!-- /input-group -->
				  </div>
				  
				  <!---XS Search -->
				  <div class="col-xs-12 hidden-sm hidden-md hidden-lg" align="center">
					  <div class="input-group-btn">
						<button data-toggle="dropdown" id="flagstrap-drop-down-Em6Z0dg5" class="btn btn-default btn-md dropdown-toggle"><span class="flagstrap-selected-Em6Z0dg5">Language</span><span class="caret" style="margin-left: 10px;"></span></button>
						<ul id="flagstrap-drop-down-Em6Z0dg5-list" aria-labelled-by="flagstrap-drop-down-Em6Z0dg5" class="dropdown-menu" style="height: auto; max-height: 250px; overflow-x: hidden;">
							<li><a data-val="SG"><i class="flagstrap-icon flagstrap-cn" style="margin-right: 10px;"></i>China</a></li>
							<li><a data-val="US"><i class="flagstrap-icon flagstrap-us" style="margin-right: 10px;"></i>United States</a></li>
						</ul>
					  </div><!-- /btn-group -->
					  
					  <div class="input-group-btn">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							$ Currency
							<span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="#">US$</a></li>
							<li><a href="#">S$</a></li>
							<li><a href="#">RMB</a></li>
							<li><a href="#">IDR</a></li>
						  </ul>
					  </div>
					  
					  <div class="input-group-btn">
						  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Location
							<span class="caret"></span>
						  </button>
						  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><input type="text" placeholder="Enter Keyword" class="form-control" style="height:34px; background:white; padding:0px 4px 0px 4px; width:100%;"></li>
							<li><a href="#">Unites States</a></li>
							<li><a href="#">Chinese</a></li>
						  </ul>
					  </div><!-- /btn-group -->
					  
					  <div class="clearfix"></div><br>
					  
					  <div class="input-group">
						  <input type="text" class="form-control" style="border-color: #D9534F #D9534F #D9534F;" placeholder="Where is your special occassion?" aria-describedby="basic-addon2">
						  <span class="input-group-addon search-btn-xs" id="basic-addon2"><a href="" style="color:#fff;">Search</a></span>
					  </div>

				  </div>
				  <div class="clearfix"></div>
				  
				</div>
			</article>
		</section>
		
		
		
		<section id="howitworks" style="margin-top:60px;">
			<article class="container">
			
				<div class=" col-md-2 col-sm-3">
					<br><br><h4 class="">FILTERS</h4>
					<span>PRICE RANGE</span><br>
					<select style="width:100%; height:26px;">
						<option value="">Sort by</option>	
						<option value="1">Price - High to Low</option>
						<option value="2">Price - Low to High</option>
						<option value="3">Most Popular</option>
						<option value="4">New Arrivals</option>
					</select>
					
					<div class="clearfix"></div><br>
					
					<span>SIZE</span><br>
					<div class="col-sm-12 fl-box">
						<input type="checkbox"> <span style="margin-top:-3px;">X-Small</span><br>
						<input type="checkbox"> <span style="margin-top:-3px;">Small</span><br>
						<input type="checkbox"> <span style="margin-top:-3px;">Medium</span><br>
						<input type="checkbox"> <span style="margin-top:-3px;">S/M</span><br>
						<input type="checkbox"> <span style="margin-top:-3px;">Large</span><br>
						<input type="checkbox"> <span style="margin-top:-3px;">Free Size</span>
					</div>
					
					<div class="clearfix"></div><br>
					
					<!--span>DESIGNER</span><br>
					<input type="text" placeholder="Search for a Designer" style="width:100%; padding-left:5px;">
					<div class="col-sm-12 fl-box">
						<input type="checkbox"> <span style="margin-top:-3px;">Designer 1</span><br>
						<input type="checkbox"> <span style="margin-top:-3px;">Designer 2</span><br>
						<input type="checkbox"> <span style="margin-top:-3px;">Designer 3</span><br>
						<input type="checkbox"> <span style="margin-top:-3px;">Designer 4</span><br>
						<input type="checkbox"> <span style="margin-top:-3px;">Designer 5</span><br>
						<input type="checkbox"> <span style="margin-top:-3px;">Designer 6</span>
					</div-->
					
					<div class="clearfix"></div><br>
					
					<span>RESERVATION DATE</span><br>
					<input type="text" placeholder="Select Your Event Date" style="width:100%; padding-left:5px;">
						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
							  <h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								  Color <span class="pull-right"><i class="fa fa-plus-square-o"></i></span>
								</a>
							  </h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							  <div class="panel-body">
								<input type="checkbox"> <span style="margin-top:-3px;">Color 1</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Color 2</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Color 3</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Color 4</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Color 5</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Color 6</span>
							  </div>
							</div>
						  </div>
						  <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
							  <h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								  Clothing <span class="pull-right"><i class="fa fa-plus-square-o"></i></span>
								</a>
							  </h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							  <div class="panel-body">
								<input type="checkbox"> <span style="margin-top:-3px;">Clothing 1</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Clothing 2</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Clothing 3</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Clothing 4</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Clothing 5</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Clothing 6</span>
							  </div>
							</div>
						  </div>
						  <!--div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
							  <h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								  Occasion <span class="pull-right"><i class="fa fa-plus-square-o"></i></span>
								</a>
							  </h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							  <div class="panel-body">
								<input type="checkbox"> <span style="margin-top:-3px;">Designer 1</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Designer 2</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Designer 3</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Designer 4</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Designer 5</span><br>
								<input type="checkbox"> <span style="margin-top:-3px;">Designer 6</span>
							  </div>
							</div>
						  </div-->
						</div>
					
				</div>
				
				<div class="col-md-10 col-sm-9" style="margin-top:10px;">
					<br><br>
					<a href="products.html">Back to Search</a>
					<span class="pull-right">
						<a href="products.html">Previous Dress</a> &nbsp;&nbsp;&nbsp;&nbsp;
						<a href="products.html">Next Dress</a> 
					</span>
					
					<hr>
					
					<div class="col-md-6" align="center">
						<div class="zoom-wrapper">
							<div class="zoom-left">
							<img style="border:1px solid #e8e8e6;" id="zoom_09" src="<?php echo IURL ?>assets/images/small/pr1-1.jpg" data-zoom-image="images/big/pr1-1.jpg" width="411">
							<div id="gallery_09" style="width=" 500pxfloat:left;="" "="">
							 
							<a href="#" class="elevatezoom-gallery active" data-update="" data-image="images/small/pr1-1.jpg" data-zoom-image="images/big/pr1-1.jpg">
							<img src="<?php echo IURL ?>assets/images/small/pr1-1.jpg" width="100"></a>

							<a href="#" class="elevatezoom-gallery active" data-update="" data-image="images/small/pr1-2.jpg" data-zoom-image="images/big/pr1-2.jpg">
							<img src="<?php echo IURL ?>assets/images/small/pr1-2.jpg" width="100"></a>

							<a href="#" class="elevatezoom-gallery active" data-update="" data-image="images/small/pr1-3.jpg" data-zoom-image="images/big/pr1-3.jpg">
							<img src="<?php echo IURL ?>assets/images/small/pr1-3.jpg" width="100"></a>

							<a href="#" class="elevatezoom-gallery active" data-update="" data-image="images/small/pr1-4.jpg" data-zoom-image="images/big/pr1-4.jpg">
							<img src="<?php echo IURL ?>assets/images/small/pr1-4.jpg" width="100"></a>
								
							</div>
							</div>

						</div>
					</div>
					
					<div class="col-md-6">
						<h3>EMBELLISHED MATTE JERSEY GOWN</h3>
						<p>Designer: Shelli Segal</p>
						<h4><i class="fa fa-inr"></i> 27,100 Rental &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-inr"></i> 27,800 Retail</h4><br>
						<div class="col-sm-4 no-padd">
							<select>
								<option>Select Size</option>
								<option>Small</option>
								<option>Medium</option>
								<option>Large</option>
							</select>
						</div>
						<div class="col-sm-6">
							<p><a href=""> Measurements</a></p>
						</div>
						<div class="clearfix"></div><br>
						<a class="btn btn-success" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
						  Questions? Ask us now!
						</a>
						<div class="collapse" id="collapseExample">
						  <div class="well">
							<input type="text" placeholder="Email ID" class="form-control"><br>
							<textarea type="text" placeholder="Your Message" class="form-control" rows="4"></textarea><br>
							<button class="btn btn-danger">Submit</button>
						  </div>
						</div>
						
						<hr>
						
						<div class="col-sm-6 no-padd">
							Select your event Date:
							<input type="Date" style="width:100%;" placeholder="">
						</div>
						<div class="col-sm-6">
							Delivery to:
							<select style="width:100%; height:26px;">
								<option>Banglore</option>
								<option>Chennai</option>
								<option>Hyderabad</option>
								<option>Mumbai</option>
								<option>Vizag</option>
							</select>
						</div>
						<div class="clearfix"></div><br>
						<a class="btn btn-danger col-sm-12" href="">Book Now</a><br><br>
						<a class="btn btn-primary col-sm-12" href="">Request Express Delivery</a>
					</div>
					
					<div class="clearfix"></div><br><hr>
					
					
					<div class="col-md-12">
						<h3>Related Products</h3>
						<div class="clearfix"></div>
						
						<div class="col-sm-3 col-md-2 col-xs-6 no-padd" align="center">
						<a href="item.html">
							<div class="box-br">
								<img src="<?php echo IURL ?>assets/images/small/pr3-1.jpg" class="img-responsive" width="200">
								<br><p class="caps">Ivory silk & velvet</p>
								<p>950 Rental</p>
								<p><i class="fa fa-inr"></i> 27,000</p>
							</div>
						</a>
						</div>
						
						<div class="col-sm-3 col-md-2 col-xs-6 no-padd" align="center">
						<a href="item.html">
							<div class="box-br">
								<img src="<?php echo IURL ?>assets/images/small/pr4-1.jpg" class="img-responsive">
								<br><p class="caps">Ivory silk & velvet</p>
								<p>950 Rental</p>
								<p><i class="fa fa-inr"></i> 27,000</p>
							</div>
						</a>
						</div>
						
						<div class="col-sm-3 col-md-2 col-xs-6 no-padd" align="center">
						<a href="item.html">
							<div class="box-br">
								<img src="<?php echo IURL ?>assets/images/small/pr3-1.jpg" class="img-responsive">
								<br><p class="caps">Ivory silk & velvet</p>
								<p>950 Rental</p>
								<p><i class="fa fa-inr"></i> 27,000</p>
							</div>
						</a>
						</div>
						
						<div class="col-sm-3 col-md-2 col-xs-6 no-padd" align="center">
						<a href="item.html">
							<div class="box-br">
								<img src="<?php echo IURL ?>assets/images/small/pr2-1.jpg" class="img-responsive">
								<br><p class="caps">Ivory silk & velvet</p>
								<p>950 Rental</p>
								<p><i class="fa fa-inr"></i> 27,000</p>
							</div>
						</a>
						</div>
						
						<div class="col-sm-3 col-md-2 col-xs-6 no-padd" align="center">
						<a href="item.html">
							<div class="box-br">
								<img src="<?php echo IURL ?>assets/images/small/pr1-1.jpg" class="img-responsive" width="200">
								<br><p class="caps">Ivory silk & velvet</p>
								<p>950 Rental</p>
								<p><i class="fa fa-inr"></i> 27,000</p>
							</div>
						</a>
						</div>
						
						<div class="col-sm-3 col-md-2 col-xs-6 no-padd" align="center">
						<a href="item.html">
							<div class="box-br">
								<img src="<?php echo IURL ?>assets/images/small/pr4-1.jpg" class="img-responsive">
								<br><p class="caps">Ivory silk & velvet</p>
								<p>950 Rental</p>
								<p><i class="fa fa-inr"></i> 27,000</p>
							</div>
						</a>
						</div>
						
						<div class="clearfix"></div><br>
					</div>
					
					<div class="clearfix"></div><br><hr>
					
					<div class="col-md-6">
						<h3>Post Your Review</h3>
						<span><small>Add your openion on this product...</small></span>
						<div class="clearfix"></div><br>
						<div class="form-group">
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-user"></i></div>
							<input type="text" class="form-control" placeholder="Your Name">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-star"></i></div>
							<select class="form-control" placeholder="Your Name">
								<option>Give Your Rating</option>
								<option>Excellent</option>
								<option>Super</option>
								<option>Good</option>
								<option>Average</option>
								<option>Bad</option>
							</select>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
							<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
							<textarea type="text" class="form-control" placeholder="Your Openion" rows="5"></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group pull-right">
							<button class="btn btn-warning">Post Review</button>
							</div>
						</div>
					</div>
					
					
					<div class="col-md-6">
						<h3>User Reviews</h3>
						<span><small>People says about this product...</small></span>
						<div class="clearfix"></div><br>
						<div class="col-sm-12">
							<i class="fa fa-comments-o" style="font-size:40px; float:left; margin-right:10px; color:#999;"></i> Product looks good and quality also excellent. Good Collection, I refer to my friends also...<br>
							<span class="pull-right"><b><i>John Deo</i></b></span>
						<hr>
						</div>
						<div class="col-sm-12">
							<i class="fa fa-comments-o" style="font-size:40px; float:left; margin-right:10px; color:#999;"></i> Product looks good and quality also excellent. Good Collection, I refer to my friends also...<br>
							<span class="pull-right"><b><i>John Deo</i></b></span>
						<hr>
						</div>
						<div class="col-sm-12">
							<i class="fa fa-comments-o" style="font-size:40px; float:left; margin-right:10px; color:#999;"></i> Product looks good and quality also excellent. Good Collection, I refer to my friends also...<br>
							<span class="pull-right"><b><i>John Deo</i></b></span>
						<hr>
						</div>
						<div class="col-sm-12">
							<i class="fa fa-comments-o" style="font-size:40px; float:left; margin-right:10px; color:#999;"></i> Product looks good and quality also excellent. Good Collection, I refer to my friends also...<br>
							<span class="pull-right"><b><i>John Deo</i></b></span>
						<hr>
						</div>
					</div>
					
				</div>
				
			</article>
		</section>
		
		<div class="clearfix"></div><br><br>
		
		<div class="footer2">
				<div class="container">
					<div class="row">
						
						<div class="col-md-6 widget">
							<div class="widget-body">
								<p class="simplenav">
									<a class="a-text" href="#">Privacy Policy</a> |
									<a class="a-text" href="#">Terms & Conditions</a>
								</p>
							</div>
						</div>

						<div class="col-md-6 widget">
							<div class="widget-body">
								<p class="text-right">
									Copyright &copy; 2015, Gowns4Rent</a> 
								</p>
							</div>
						</div>

					</div> <!-- /row of widgets -->
				</div>
			</div>
    <?php require("pages/popup.php") ?>
</body>
	
		<script src="dist/js/jquery.flagstrap.js"></script>
		<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<script>
			$('.carousel').carousel({
			  interval: 12000
			})
		</script>
		<script>
					$(document).ready(function(){
						$(".search-btn").click(function(){
							$(".search").slideToggle('slow');
						});
					});
				</script>
		<script>
			$(window).on("scroll", function() {
				if($(window).scrollTop() > 50) {
					$(".header").addClass("active");
				} else {
					//remove the background property so it comes transparent again (defined in your css)
				   $(".header").removeClass("active");
				}
			});
			
			
			$('.autoplay').slick({
			  slidesToShow: 6,
			  slidesToScroll: 1,
			  autoplay: true,
			  autoplaySpeed: 2000,
			});
			
			$('.multiple-items').slick({
			  infinite: true,
			  slidesToShow: 1,
			  slidesToScroll: 1
			});
		</script>
		<script>
		  function myFunction()
		  {
			$('#register').modal();
		  }
		  
			$('#login').on('click', function() {
				var previous=$(this).data('previous');
				var next=$(this).data('target');
				
				$(previous).hide(200);
				$(next).show(500);
				});
			$('#register').on('click', function() {
				var previous=$(this).data('previous');
				var next=$(this).data('target');
				
				$(previous).hide(200);
				$(next).show(500);
				});
		</script>
		
		
		
		<script type="text/javascript">
		$(document).ready(function () {
				  $("#zoom_09").elevateZoom({
					gallery : "gallery_09",
					galleryActiveClass: "active"
						}); 
					
		  
			 $("#select").change(function(e){
		   var currentValue = $("#select").val();
		   if(currentValue == 1){    
		   smallImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image1.png';
		   largeImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image1.jpg';
		   }
		   if(currentValue == 2){    
		   smallImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image2.png';
		   largeImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image2.jpg';
		   }
		   if(currentValue == 3){    
		   smallImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image3.png';
		   largeImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image3.jpg';
		   }
		   if(currentValue == 4){    
		   smallImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/small/image4.png';
		   largeImage = 'http://www.elevateweb.co.uk/wp-content/themes/radial/zoom/images/large/image4.jpg';
		   }
			// Example of implementing Active Class
		  $('#gallery_09 a').removeClass('active').eq(currentValue-1).addClass('active');		
		 
		 
			 var ez =   $('#zoom_09').data('elevateZoom');	  
		   
		  ez.swaptheimage(smallImage, largeImage); 
			 
			});
		}); 

		</script>
		
<html>
