<!DOCTYPE html>
<html class="no-js" prefix="ng: https://angularjs.org">
<!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="fragment" content="!">
    <title>Redcarpet Matrimony</title>
    <meta name="description" content="Red Carpet Matrimony" />
    <meta name="keywords" content="Red Carpet Matrimony" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="icon" href="<?php echo IURL ?>assets/images/icons/favicon_medium.png" type="image/png">
    <link rel="stylesheet" href="<?php echo IURL ?>assets/css/bootstrap/css/bootstrap.min7b30.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="<?php echo IURL ?>assets/css/style2dac.css?v=21" type="text/css" />
    <link rel="stylesheet" href="<?php echo IURL ?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo IURL ?>assets/css/jquery.mCustomScrollbar.min.css" type="text/css" />
    <style>
        .errorCls {
          color: red;
          font: 11px Arial
        }
        td {
            padding-top: 10px;
            font-size: 13px;
            font-weight: 400;
            color: #fff;
            text-align: left;
        }

        input {
            border: .5px solid gray;
        }

        .well {
            background-color: #20bf42ba;
        }
    </style>
</head>

<body>
    <!--Header Start-->
    <?php require('pages/header.php'); ?>
	<!--Header End-->
	<div class="slider-bg">
		<!-- Banner start-->
		<div class="couple-hero-section-img1" alt=""></div>

		<div class="find-section">
			<!-- Find search section-->
			<div class="container">
				<div class="row">
					<div style="margin-top: -450px;" class="pull-right">
						<h2 style="color: #fff">Perfect place for your perfect match!</h2>
						<div class="col-xs-12 col-md-8 col-sm-6 box well" style="padding:15px 15px 30px 15px; width: 480px; border-radius: 5px;">
						  <div class="page-overlay loader-wrapper">
							<div class="disc-loader-svg"></div>
						  </div>
						  <label class="label success-text" style="font-size: 12px; text-align: center;"></label>
							<form id="reg_form" action="#" method="post" autocomplete="off" autofocus="off">
								<h1 style="color: #ed3237;">Register FREE</h1>
										<label><input type="radio" checked="" name="p_gender" value="female">Bride</label>
								&nbsp;&nbsp;
								<label><input type="radio" name="p_gender" value="male">Groom</label>
										<select class="form-control required" name="p_created_by">
								  <option value="">Profile Created By</option>
								  <option value="1">Self</option>
								  <option value="2">Parents</option>
								  <option value="3">Sibling</option>
								  <option value="4">Relative</option>
								  <option value="5">Friend</option>
								</select><br>
										<input type="text" class="form-control required" name="p_name" placeholder="Full Name"><br>
										<input type="email" class="form-control email required" name="p_email" placeholder="Email"><br>
										<input type="text" class="form-control number required" minlength="10" maxlength="10" id="p_mobile" name="p_mobile" placeholder="Mobile"><br>
								<input type="password" class="form-control required" maxlength="20" name="p_password" placeholder="Password"><br>
										<button type="submit" value="register" name="register" class="btn btn-lg btn-primary btn-block ripplelink">Register</button><br>
										Already have an account? <a href="" class="dismiss" data-toggle="modal" data-target="#loginModal" ><b>Login Here</b></a>
							</form>
						</div>
					</div>
				</div>
				</td>
			</div>
			<!-- /.Find search section-->
		</div>
	<?php require('pages/footer.php'); ?>
	<?php require('pages/popup.php'); ?>
	<script src="<?php echo IURL ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo IURL ?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo IURL ?>assets/js/bootstrap/bootstrap.min.js"></script>
	<script src="<?php echo IURL ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?php echo IURL ?>assets/js/angular.min.js"></script>
	<script src="<?php echo IURL ?>assets/js/angular-sanitize.js"></script>
	<script src="<?php echo IURL ?>assets/app/HomeApp7893.js"></script>
	<script src="<?php echo IURL ?>assets/js/pagescripts.js"></script>
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
