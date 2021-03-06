<!--Header Start-->
<!-- Sidebar Holder -->
<nav id="sidebar">
    <div id="dismiss" class="dismiss"> <i class="fa fa-arrow-right"></i> </div>
	<?php if(isset($_SESSION['Rcm_auth_session_login']) && $_SESSION['Rcm_auth_session_login'] === true){ 
	$heth = $db->query("SELECT `name`,`image_1` FROM `register` WHERE `user_id`='".$_SESSION['Rcm_auth_session_userid']."'");
	$h_row = $heth->fetch();
	if($h_row['gender'] == 'male'){
		$gender_photo = 'male_large.jpg';
	} else if($h_row['gender'] == 'female'){
		$gender_photo = 'female_large.jpg';
	}
	?>
    <ul class="list-unstyled CTAs">
		<ul class="list-unstyled CTAs" align="center">
			<li><img src="<?php if(!empty($h_row['image_1']) && file_exists('profile_images/'.$h_row['image_1'])) echo IURL.'profile_images/'.$h_row['image_1']; else echo IURL.'assets/images/'.$gender_photo; ?>" alt="" class="img-responsive center-block img-border"></li>
			<li style="font-weight:bold; text-transform:uppercase;"><?php echo $h_row['name']?></li>
		 
        <li><a href="<?php echo URL ?>profile/" style="color:white;">My Profile</a></li>
        <li><a href="<?php echo URL?>logout/" style="color:white;">Logout</a></li>
        </ul>
    </ul>
	<?php } else {?>
	<ul class="list-unstyled CTAs">
        <li><a href="#" class="login dismiss" data-toggle="modal" data-target="#loginModal" id="HP_Login_CTA">Login</a></li>
        <li><a href="<?php echo URL?>register/" class="register" id="HP_Banner_Register_CTA">Register Free!</a></li>
    </ul>
	<?php } ?>
    <ul class="list-unstyled components">
        <li><a href="<?php echo URL ?>">Home</a></li>
        <li><a href="../3/about.html">About us</a></li>
        <li><a href="#" id="HP_Membership_CTA">Membership Plans</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="../3/contact.html">Contact us</a></li>
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
						if(!isset($_SESSION['Rcm_auth_session_login'])){ ?>
						<a href="../3/register.html">
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