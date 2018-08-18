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
						<div class="pull-right">
							<!--a href=""><i class="fa fa-user"></i> Become a vendor</a> &nbsp;&nbsp;&nbsp;&nbsp;
							<a href=""><i class="fa fa-lock"></i> Vendor Login</a>&nbsp;&nbsp;&nbsp;&nbsp;-->
							<a href="wishlist.html"><span class="hidden-xs"><i class="fa fa-star"></i> Wish List</span></a>&nbsp;&nbsp;
							<a href="my-account.html"><span class="hidden-xs"><i class="fa fa-users"></i> My Account</span></a>&nbsp;&nbsp;
							<a href="<?php echo URL ?>home/"><span class="hidden-xs"><i class="fa fa-sign-out"></i> Sign Out</span></a>&nbsp;&nbsp;
							<a href="javascript:void(0)" class="search-btn"><i class="fa fa-search"></i>  <span class="hidden-xs">Search</span></a>
						</div>
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
					<span><b>Order ID: G4R123, November 1, 2015</b></span>
					<span class="pull-right"><a href="orders.html">Back to Orders</a> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; Hello, Pallavi...!</span>
					
					
				<hr>
				</div>
				
				<div class="col-sm-6 col-sm-offset-3">
					
					<table class="table">
					  <thead>
						<tr>
						  <th>S.No</th>
						  <th>Item Name</th>
						  <th style="text-align:right;">AMOUNT</th>
						</tr>
					  </thead>
					  <tbody>
						<tr>
						  <td>1</td>
						  <td><a href="item.html"> Lehanga - Medium Size</a></td>
						  <td align="right"><i class="fa fa-inr"></i> 6250</td>
						</tr>
						<tr>
						  <td>2</td>
						  <td><a href="item.html">Wedding Saree</a></td>
						  <td align="right"><i class="fa fa-inr"></i> 6250</td>
						</tr>
						<tr>
						  <td>3</td>
						  <td><a href="item.html">Full Gown - White</a></td>
						  <td align="right"><i class="fa fa-inr"></i> 6250</td>
						</tr>
						<tr>
						  <td>4</td>
						  <td><a href="item.html">Saree - Party Wear</a></td>
						  <td align="right"><i class="fa fa-inr"></i> 6250</td>
						</tr>
						<tr>
						  <th>&nbsp;</th>
						  <th>Total <br> Discount</th>
						  <th style="text-align:right;"><i class="fa fa-inr"></i> 24,625<br> <i class="fa fa-inr"></i> 1480</th>
						</tr>
						<tr>
						  <th>&nbsp;</th>
						  <th class="red-text">Pay Amount</th>
						  <th style="text-align:right;" class="red-text">23,145</th>
						</tr>
					  </tbody>
					</table>
					
				</div>
				
			</article>
		</section>
		
		<div class="clearfix"></div><br><br><br><br><br><br><br><br>
		
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
			
			
		<!-- Register Popup Start -->
			<div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Create Your Account</h4>
				  </div>
				  <div class="modal-body">
					
					<div class="col-sm-12">
						<input type="text" class="form-control" placeholder="Email ID"><br>
					</div>
					<div class="col-sm-6">
						<select type="text" class="form-control">
							<option>Select State</option>
							<option>Tamilnadu</option>
							<option>Karnataka</option>
							<option>Telangana</option>
							<option>Andhra Pradesh</option>
						</select><br>
						<input type="text" class="form-control" placeholder="Password"><br>
						<span class="red-text">*</span>Iam a: <input type="radio"> Buyer <input type="radio"> Seller
					</div>
					<div class="col-sm-6">
						<select type="text" class="form-control">
							<option>Select Location</option>
							<option>Hyderabad</option>
							<option>Vijayawada</option>
							<option>Visakhapatnam</option>
						</select><br>
						<input type="text" class="form-control" placeholder="Re-enter Password"><br>
					</div>
					<div class="clearfix"></div><br><br>
					<h4>Add your Contact Information</h4>
					<hr>
					<div class="col-sm-6">
						<input type="text" class="form-control" placeholder="First Name"><br>
						<input type="text" class="form-control" placeholder="Tele Phone"><br>
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control" placeholder="Last Name"><br>
						<input type="text" class="form-control" placeholder="Company Name"><br>
					</div>
					<div class="clearfix"></div>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-primary">Register</button>
				  </div>
				</div>
			  </div>
			</div>
		<!-- Register Popup End -->
		
		
		<!-- Onload Register Popup Start -->
		
			<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<a href="" class="pull-right red-text" data-dismiss="modal"><span aria-hidden="true" style="font-size:22px;">&times;</span></a>
					<h3 class="modal-title headding-style red-text" id="myModalLabel">Join Now</h3>
					<span class="pull-left" id="myModalLabel">Create your account</span>
					<div class="clearfix"></div>
				  </div>
				  <form class="form-horizontal" name="footercontact" method="post" action="../footermail1.php">
				  <div class="modal-body">
					
						<div class="form-group">
							<div class="col-sm-12">
								<span><input type="radio"> <small>Vendor</small> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio"> <small>Customer</small></span>
							</div>
							<div class="col-sm-4">
								<button data-toggle="dropdown" id="flagstrap-drop-down-Em6Z0dg5" class="btn btn-default btn-md dropdown-toggle"><span class="flagstrap-selected-Em6Z0dg5"><i class="flagstrap-icon flagstrap-us" style="margin-right: 10px;"></i>United States</span><span class="caret" style="margin-left: 10px;"></span></button>
								<ul id="flagstrap-drop-down-Em6Z0dg5-list" aria-labelled-by="flagstrap-drop-down-Em6Z0dg5" class="dropdown-menu" style="height: auto; max-height: 250px; overflow-x: hidden;"><li><a data-val="SG"><i class="flagstrap-icon flagstrap-sg" style="margin-right: 10px;"></i>Singapore</a></li><li><a data-val="US"><i class="flagstrap-icon flagstrap-us" style="margin-right: 10px;"></i>United States</a></li></ul>
							</div>
							<div class="col-sm-4">
								<select class="form-control">
									<option>$</option>
									<option>$ US</option>
									<option>$ SGD</option>
								</select>
							</div>
							<div class="col-sm-4">
								<select class="form-control">
									<option>Lnguagea</option>
									<option>United States</option>
									<option>Singapore</option>
									<option>Chinese</option>
								</select>
							</div>
						</div>
						<div class="form-group">
						  <div class="col-sm-12">
							<input type="text" class="form-control" placeholder="Email Address" name="name" required>  
						  </div>
						</div>
						<div class="form-group">
						  <div class="col-sm-6">
							<input type="email" class="form-control" placeholder="Password" name="email" required>
						  </div>
						  <div class="col-sm-6">
							<input type="date" class="form-control" placeholder="Birthday" name="mobile" onKeyPress="return checkIt(event);" required autocomplete="off">
						  </div>
						</div>
						<div class="form-group">
						  <div class="col-sm-12">
							<input type="submit" name="Submit" class="btn btn-success col-xs-12" value="Join Now">
						  </div>
						</div>
					
				  </div>
				  <div class="modal-footer">
					<div class="form-group">
					  <div class="col-sm-6">
						<a class="btn btn-primary col-xs-12"><i class="fa fa-facebook"></i> Signup</a>
					  </div>
					  <div class="col-sm-6">
						<a class="btn btn-danger col-xs-12"><i class="fa fa-google-plus"></i> Signup</a>
					  </div>
					  <div class="col-sm-12" align="center">
						<br><a class="" href="" data-toggle="modal" data-target="#login" data-dismiss="modal"><i class="fa fa-user"></i> ALREADY HAVE AN ACCOUNT? SIGN IN.</a>
					  </div>
					</div>
				  </div>
				  </form>
				</div>
			  </div>
			</div>
		
		<!-- Onload Register Popup End -->
		
		
		<!-- Login Popup Start -->
		
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
					<a href="" class="pull-right red-text" data-dismiss="modal"><span aria-hidden="true" style="font-size:22px;">&times;</span></a>
					<h3 class="modal-title headding-style red-text" id="myModalLabel">Sign In</h3>
					<span class="pull-left" id="myModalLabel">Sign in to access your account</span>
					<div class="clearfix"></div>
				  </div>
				  <form class="form-horizontal" name="footercontact" method="post" action="../footermail1.php">
				  <div class="modal-body">
					
						<div class="form-group">
							<div class="col-sm-12">
								<span><input type="radio"> <small>Vendor</small> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio"> <small>Customer</small></span>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-6">
								<input type="text" class="form-control" placeholder="Email Address" name="name" required> 
							</div>
							<div class="col-sm-6">
								<input type="email" class="form-control" placeholder="Create Password" name="email" required>
							</div>
						</div>
						<div class="form-group">
						  <div class="col-sm-12">
							<input type="submit" name="Submit" class="btn btn-success col-xs-12" value="Sign In">
						  </div>
						</div>
					
				  </div>
				  <div class="modal-footer">
					<div class="form-group">
					  <div class="col-sm-6">
						<a class="btn btn-primary col-xs-12"><i class="fa fa-facebook"></i> Signup</a>
					  </div>
					  <div class="col-sm-6">
						<a class="btn btn-danger col-xs-12"><i class="fa fa-google-plus"></i> Signup</a>
					  </div>
					  <div class="col-sm-12" align="center">
						<br><a class="" href="" data-toggle="modal" data-target="#register" data-dismiss="modal"><i class="fa fa-user"></i> DON’T HAVE AN ACCOUNT? JOIN NOW.</a>
					  </div>
					</div>
				  </div>
				  </form>
				</div>
			  </div>
			</div>
		
		<!-- Login Popup End -->
		
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
		

	</body>
<html>
