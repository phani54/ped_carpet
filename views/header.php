
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
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="icon" href="<?php echo URL ?>assets/images/icons/favicon_medium.png" type="image/png">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/bootstrap/css/bootstrap.min7b30.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/style2dac.css?v=21" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo URL ?>assets/css/jquery.mCustomScrollbar.min.css" type="text/css" />
    <script src="<?php echo URL ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo URL ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo URL ?>assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo URL ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo URL ?>assets/js/angular.min.js"></script>
    <script src="<?php echo URL ?>assets/js/angular-sanitize.j"></script>
    <script src="<?php echo URL ?>assets/app/HomeApp7893.js"></script>
    <script src="<?php echo URL ?>assets/js/pagescripts.js"></script>

    <script type="text/javascript" src="<?php echo URL ?>assets/js/bootstrap/bootstrap-select.min.js"></script> 
    <script type="text/javascript" src="<?php echo URL ?>assets/js/main7893.js?v=24" ></script> 
    <script type="text/javascript" src="https://www.lovevivah.com/assets/js/slick/slick.js"></script>  
    <script type="text/javascript" src="<?php echo URL ?>assets/js/select2/select2.min.js" ></script> 
    <script type="text/javascript" src="<?php echo URL ?>assets/js/commonfc7a.js?v=29"></script> 


    
    <style>
        .custom-select-trigger {
                font-size: 13px;
            
        }
    </style>
</head>

<body>
<nav id="sidebar">
    <div id="dismiss" class="dismiss"> <i class="fa fa-arrow-right"></i> </div>
	<?php  
        if(isset($_SESSION['id']) && $_SESSION['id'] !=0){ 

	$heth = $db->query("SELECT `name`,`image`,`gender` FROM `profiles` WHERE `id`='".$_SESSION['id']."'");
	$h_row = $heth->fetch();
	if($h_row['gender'] == 'Male'){
		$gender_photo = 'male_large.jpg';
	} else if($h_row['gender'] == 'Female'){
		$gender_photo = 'female_large.jpg';
    }

	?>
    <ul class="list-unstyled CTAs">
		<li>
            <img src="<?php if(!empty($h_row['image']) && file_exists('../adminupload/'.$h_row['image'])) { echo URL.'adminupload/'.$h_row['image']; }else {echo URL.'assets/images/'.$gender_photo;} ?>" alt="" class="img-responsive center-block img-border">
        </li>
        <li style="font-weight:bold; text-transform:uppercase;"><?php echo $h_row['name'];?></li>
        <li><a href="<?php echo URL_VIEW;?>profile.php" style="color:white;">My Profile</a></li>
        <li><a href="<?php echo URL_VIEW;?>logout.php" style="color:white;">Logout</a></li>
    </ul>
	<?php } else {?>
	<ul class="list-unstyled CTAs">
        <li><a href="#" class="login dismiss" data-toggle="modal" data-target="#loginModal" id="HP_Login_CTA">Login</a></li>
        <li><a href="<?php echo URL?>register.php" class="register" id="HP_Banner_Register_CTA">Register Free!</a></li>
    </ul>
	<?php } ?>
    <ul class="list-unstyled components">
        <li><a href="<?php echo URL ?>">Home</a></li>
        <li><a href="<?php echo URL_VIEW;?>about.php">About us</a></li>
        <li><a href="<?php echo URL_VIEW;?>plans.php" id="HP_Membership_CTA">Membership Plans</a></li>
        <li><a href="<?php echo URL_VIEW;?>help.php">Help</a></li>
        <li><a href="<?php echo URL_VIEW;?>contact.php">Contact us</a></li>
    </ul>
    <div class="side-feedback">
        <h3>Give Us Your Feedback</h3>
        <p> Need any help? Write to us at <a href="mailto:support@redcarpetmatrimony.com">support@redcarpetmatrimony.com</a>
            <br> Call :
            <a href="tel:+91-124-265 8600">+91-123-456 7890</a> (India)
        </p>
        <h3>Follow us</h3>
        <ul class="list-inline side-social">
            <li><a href="#!" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#!" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#!" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#!" target="_blank"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#!" target="_blank"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
</nav>

<div class="overlay"></div>
<div class="header-v2 navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 logo">
                <div class="navbar-brand">
                    <a href="<?php echo URL ?>"><img src="<?php echo URL ?>assets/images/logo2.png" alt="" class="img-responsive" style="
padding: 10px;
"></a>
                </div>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-2 hidden-xs">
                <a class="sidebar-icon btn btn-link" id="sidebarCollapse"> <i class="fa fa-bars"></i> </a>
                <div class="header-btns">
					<?php 
						if(!isset($_SESSION['id'])){ ?>
						<a href="<?php echo URL_VIEW;?>register.php">
							<button type="submit" class="btn btn-primary " id="HP_Banner_Register_CTA"><i class="fa fa-edit"></i>  Register Free!</button>
						</a>
						<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#loginModal" id="HP_Login_CTA"><i class="fa fa-lock"></i>  Login</button>
					<?php } ?>
					</div>
            </div>
            <a class="sidebar-icon btn btn-link mobile-ham" id="sidebarCollapse1"> <i class="fa fa-bars"></i> </a>
        </div>
    </div>
</div>

<!--Header End-->