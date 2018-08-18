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
				
				<div class="col-md-12" style="margin-top:10px;">
					<br><br>
					<a href="">Back to Home</a>
					<span class="pull-right">Hello, Pallavi...!</span>
					
				<hr>
				</div>
				
				<div class=" col-md-2 col-sm-3">
					<h4 class="">FILTERS</h4>
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
					
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p1.jpg" class="img-responsive" width="200">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p2.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p3.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p4.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="clearfix"></div><br>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p5.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p6.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p1.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p2.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="clearfix"></div><br>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p1.jpg" class="img-responsive" width="200">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p2.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p3.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p4.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="clearfix"></div><br>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p5.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p6.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p1.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="col-sm-3" align="center">
					<a href="item.html">
						<div class="box-br">
							<img src="<?php echo IURL ?>assets/images/p2.jpg" class="img-responsive">
							<br><p class="caps">Ivory silk & velvet</p>
							<p>Designer: Anita Dongre</p>
							<p>950 Rental</p>
							<p><i class="fa fa-inr"></i> 27,000</p>
						</div>
					</a>
					</div>
					
					<div class="clearfix"></div><br>
					
				</div>
				
			</article>
		</section>
		
		<div class="clearfix"></div>
		
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

<html>
