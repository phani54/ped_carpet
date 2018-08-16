<?php ob_start(); error_reporting(0);
require "lib/config.php";
require "lib/secure.php";
$prow = $seth->fetch();
$dob = explode('-',$prow['dob']);
if($prow['gender'] == 'male'){
	$gender_photo = 'male_large.jpg';
} else if($prow['gender'] == 'female'){
	$gender_photo = 'female_large.jpg';
}
function cm2feet($cm)	
{
     $inches = $cm/2.54;
     $feet = intval($inches/12);
     $inches = $inches%12;
     return sprintf('%d.%d"', $feet, $inches);
}

if(isset($_POST) && $_POST['action'] === 'profile_update') {
	//echo print_r($_POST); exit;
	stripcslashes($_POST);
	if(empty($_POST['p_password'])){
		$dob = $_POST['p_yyyy'].'-'.$_POST['p_mm'].'-'.$_POST['p_dd'];
		$from = new DateTime($dob);
		$to = new DateTime('today');
		$age = $from->diff($to)->y;
		$script = "`dob`='".$dob."', `age`= '".$age."', ";
		$filename1 = stripslashes($_FILES['p_image_1']['name']);
		$filename2 = stripslashes($_FILES['p_image_2']['name']);
		if(!empty($filename1)) {
			$image = time()."_".$filename1;
			$img_path="profile_images/".$image;
			if(move_uploaded_file($_FILES['p_image_1']['tmp_name'], $img_path)){
				$script .= "`image_1`='".$image."', ";
				if(file_exists("profile_images/".$prow['image_1'])){
					unlink("profile_images/".$prow['image_1']);
				}
			}
		}
		if(!empty($filename2)) {
			$image = time()."_".$filename2;
			$img_path="profile_images/".$image;
			if(move_uploaded_file($_FILES['p_image_2']['tmp_name'], $img_path)){
				$script .= "`image_2`='".$image."', ";
				if(file_exists("profile_images/".$prow['image_2'])){
					unlink("profile_images/".$prow['image_2']);
				}
			}
		}
		
		unset($_POST['action'], $_POST['p_dd'], $_POST['p_mm'], $_POST['p_yyyy'], $_POST['p_password'], $_POST['p_newpassword']);
		
		foreach($_POST as $key => $value){
			if(!empty($value)){
				$script .= "`".substr($key, 2)."`='".$value."', ";
			}
		}
		$updateQuery = "UPDATE `register` SET ".substr($script,0,-2)." WHERE `user_id`='".$_SESSION['Rcm_auth_session_userid']."'";
		$uth = $db->query($updateQuery);
		if($uth > 0) {
			echo '<script>alert("Profile updated"); window.location.href = "'.URL.'profile/";</script>';
		} else {
			echo '<script>alert("Profile not updated"); window.location.href = "'.URL.'profile/";</script>';
		}
	} else {
		$txtOldPassword = md5(strip_tags($_POST['p_password']));
		$txtPassword = md5(strip_tags($_POST['p_newpassword']));
		if($txtPassword != $txtOldPassword){
			if($txtOldPassword==$prow['password']){
				$sth = $db->query("UPDATE `register` SET `password`='$txtPassword' WHERE `user_id`='".$_SESSION['Rcm_auth_session_userid']."'");
				if($sth > 0){
					echo '<script>alert("Password updated successfully"); window.location.href = "'.URL.'profile/";</script>';
				}
			} else {
				echo '<script>alert("Invalid current password!."); window.location.href = "'.URL.'profile/";</script>';
			}
		} else {
			echo '<script>alert("New Password must different to Current Password"); window.location.href = "'.URL.'profile/";</script>';
		}
	}
}
?>
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
    <link rel="stylesheet" href="<?php echo IURL ?>css/side-menu.css" type="text/css" />
    <style>
        .errorCls {
            color: red;
            font: 11px Arial
        }
    </style>
</head>

<body>

    <!--Header Start-->
    <?php require('pages/header.php'); ?>
        <!--Header End-->

        <img src="<?php echo IURL ?>images/banner-inner.jpg" class="img-responsive">

        <br>
        <br>
        <section class="main-wrapper container innerpage-content">
            <article>
                <div class="">
                    <div class="col-sm-12 no-padd">
                        <div class="col-sm-12 gap no-padd">
                            <div class="col-sm-3">
                                <div id="cssmenu1">
                                    <ul>
                                        <li class="active"><a href="#"><span>My Dashboard</span></a></li>
                                        <li class=""><a href="recent-visitors.html"><span>My Profile </span></a></li>
                                        <li class=""><a href="recent-visitors.html"><span>Interests Sent (0) </span></a></li>
                                        <li class=""><a href="recent-visitors.html"><span>Interests Received (0) </span></a></li>
                                        <li class=""><a href="recent-visitors.html"><span>Recent Visitors (0) </span></a></li>
                                        <li class=""><a href="recent-visitors.html"><span>My Favourite Profiles (1) </span></a></li>
                                        <li class=""><a href="matched.html"><span>Matched Profiles</span></a></li>
                                        <li class="last"><a href="#"><span>Contact</span></a></li>
                                    </ul>
                                </div>
                                <br>
                                <img src="<?php echo IURL ?>images/ad.jpg" class="img-responsive">

                                <br>

                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Latest Profiles </h3>
                                    </div>
                                    <div class="panel-body">
                                        <!--div class="row recent">
                                            <div class="col-sm-5 no-padd"><img src="<?php echo IURL ?>assets/images/bride_1.jpg" class="img-responsive"></div>
                                            <div class="col-sm-7"><b>Sri Latha</b>
                                                <br>ID: RC12345
                                                <br>Hyderabad
                                                <br><a href=""><small><b>View Profile</b></small></a></div>
                                        </div-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-9">
								<form method="post" id="profileFrm" enctype="multipart/form-data" action="<?php echo URL ?>profile/" >
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Personal Details</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-sm-6" align="center">
                                            <img src="<?php if(!empty($prow['image_1']) && file_exists('profile_images/'.$prow['image_1'])) echo IURL.'profile_images/'.$prow['image_1']; else echo IURL.'assets/images/'.$gender_photo; ?>" alt="" class="img-responsive center-block img-border">
                                            <a style="color:#c3c3c3;" href=""><small><i class="fa fa-upload"></i> Update Picture</small></a>
                                            <input type="file" name="p_image_1" style="margin-top:-20px; opacity:0;">
                                        </div>
                                        <div class="col-sm-6" align="center">
                                            <img src="<?php if(!empty($prow['image_2']) && file_exists('profile_images/'.$prow['image_2'])) echo IURL.'profile_images/'.$prow['image_2']; else echo IURL.'assets/images/'.$gender_photo; ?>" alt="" class="img-responsive center-block img-border">
                                            <a style="color:#c3c3c3;" href=""><small><i class="fa fa-upload"></i> Update Picture</small></a>
                                            <input type="file" name="p_image_2" style="margin-top:-20px; opacity:0;">
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="col-sm-6">
                                                <label>Full Name</label>
                                                <br>
                                                <input type="text" name="p_name" value="<?php echo $prow['name'] ?>" class="form-control required" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Gender</label>
                                                <br>
                                                <select class="form-control required" name="p_gender">
                                                    <option value="male" <?php if($prow['gender'] == 'male') echo "selected='' ";  ?>>Male</option>
                                                    <option value="female" <?php if($prow['gender'] == 'female') echo "selected='' ";  ?>>Female</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Date of Birth</label>
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-4 no-padd">
                                                        <select class="form-control required" name="p_dd">
                                                            <option value="">DD</option>
															<?php 
															for($i=1; $i <= 31; $i++){
																$dd = sprintf('%02d', $i);
																echo '<option ';
																if($dd == $dob[2]) { echo ' selected="" '; }
																echo 'value="'.$dd.'">'.$dd.'</option>';
															}
															?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 no-padd">
                                                        <select class="form-control required" name="p_mm">
															<option value="">MM</option>
															<?php 
															$monthNames = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');
															for($m=1; $m <= 12; $m++){
																$mm = sprintf('%02d', $m);
																echo '<option ';
																if($mm == $dob[1]) { echo ' selected="" '; }
																echo 'value="'.$mm.'">'.$monthNames[$m-1].'</option>';
															}
															?>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 no-padd">
                                                        <select class="form-control required" name="p_yyyy">
                                                            <option value="">YYYY</option>
															<?php 
															for($y=date('Y')-18; $y >= 1950; $y--){
																echo '<option ';
																if($y == $dob[0]) { echo ' selected="" '; }
																echo 'value="'.$y.'">'.$y.'</option>';
															}
															?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Age</label>
                                                <br>
                                                <input type="text" readonly="" value="<?php echo $prow['age'] ?>" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Religion</label>
                                                <br>
                                                <select class="form-control" name="p_religion">
                                                    <option value="">Select</option>
													<?php 
													$rth = $db->query('SELECT `name` FROM `religions` ORDER BY `name` ASC');
													while($rrow = $rth->fetch()){
														echo '<option ';
														if($prow['religion'] == $rrow['name']) { echo ' selected="" '; }
														echo '>'.$rrow['name'].'</option>';
													}
													?>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Mother Tongue</label>
                                                <br>
                                                <select class="form-control" name="p_m_tongue">
                                                    <option value="">Select</option>
													<?php 
													$mth = $db->query('SELECT `name` FROM `languages` ORDER BY `name` ASC');
													while($mrow = $mth->fetch()){
														echo '<option ';
														if($prow['m_tongue'] == $mrow['name']) { echo ' selected="" '; }
														echo '>'.$mrow['name'].'</option>';
													}
													?>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Caste/Denomination</label>
                                                <br>
                                                <select class="form-control" name="p_caste" id="p_caste">
													<option value="">Select</option>
                                                    <?php 
													$dth = $db->query('SELECT `name`, `guid` FROM `denomination` ORDER BY `name` ASC');
													$cid = '';
													while($drow = $dth->fetch()){
														echo '<option ';
														if($prow['caste'] == $drow['name']) { $cid = $drow['guid']; echo ' selected="" '; }
														echo ' data-id="'.$drow['guid'].'">'.$drow['name'].'</option>';
													}
													?>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Division</label>
                                                <br>
                                                <select class="form-control" name="p_division" id="p_division">
                                                    <option value="">Select</option>
													<?php 
													$ddth = $db->query('SELECT `name` FROM `division` WHERE `sid`="'.$cid.'"');
													while($ddrow = $ddth->fetch()){
														echo '<option ';
														if($prow['division'] == $ddrow['name']) { echo ' selected="" '; }
														echo '>'.$ddrow['name'].'</option>';
													}
													?>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Height</label>
                                                <br>
												<select class="form-control required" name="p_height">
													<option value="">Select</option>
													<?php 
													for($i=150; $i <= 270; $i++){
														$dd = sprintf('%02d', $i);
														echo '<option ';
														if($i == $prow['height']) { echo ' selected="" '; }
														echo 'value="'.$i.'">'.cm2feet($i).' / '.$i.' cm</option>';
													}
													?>
												</select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Marital Status</label>
                                                <br>
                                                <select class="form-control required" name="p_marital_status">
													<option value="">Select</option>
                                                    <option value="single" <?php if($prow['marital_status'] == 'single') echo "selected='' ";  ?>>Single</option>
                                                    <option value="married" <?php if($prow['marital_status'] == 'married') echo "selected='' ";  ?>>Married</option>
													<option value="divorced" <?php if($prow['marital_status'] == 'divorced') echo "selected='' ";  ?>>Divorced</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Current City</label>
                                                <br>
                                                <input type="text" name="p_city" value="<?php echo $prow['city'] ?>" class="form-control required" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Brothers & Sisters</label>
                                                <br>
                                                <input type="text" name="p_siblings" value="<?php echo $prow['siblings'] ?>" class="form-control required" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Current Address</label>
                                                <br>
                                                <textarea name="p_caddress" class="form-control required" placeholder="" rows="3"><?php echo $prow['caddress'] ?></textarea>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Permanent Address</label>
                                                <br>
                                                <textarea name="p_address" class="form-control required" placeholder="" rows="3"><?php echo $prow['address'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Family Details</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-sm-12">
                                            <div class="col-sm-6">
                                                <label>Father Name</label>
                                                <br>
                                                <input type="text" name="p_f_name" value="<?php echo $prow['f_name'] ?>" class="form-control required" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Father Occupation</label>
                                                <br>
                                                <input type="text" name="p_f_occupation" value="<?php echo $prow['f_occupation'] ?>" class="form-control required" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Mother Name</label>
                                                <br>
                                                <input type="text" name="p_m_name" value="<?php echo $prow['m_name'] ?>" class="form-control required" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Mother Occupation</label>
                                                <br>
                                                <input type="text" name="p_m_occupation" value="<?php echo $prow['m_occupation'] ?>" class="form-control required" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>No.of Siblings</label>
                                                <br>
                                                <input type="text" name="p_no_of_siblings" value="<?php echo $prow['no_of_siblings'] ?>" class="form-control required" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>About Family</label>
                                                <br>
                                                <textarea rows="3" name="p_about_family" class="form-control required" placeholder=""><?php echo $prow['about_family'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Education Details</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-sm-12">
                                            <div class="col-sm-6">
                                                <label>Education Qualification</label>
                                                <br>
												<select class="form-control" name="p_edu_qualification">
                                                    <option value="">Select</option>
                                                    <?php 
													$eth = $db->query('SELECT `name` FROM `qualifications` ORDER BY `name` ASC');
													while($erow = $eth->fetch()){
														echo '<option ';
														if($prow['edu_qualification'] == $erow['name']) { echo ' selected="" '; }
														echo '>'.$erow['name'].'</option>';
													}
													?>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Other Qualification</label>
                                                <br>
                                                <input type="text" name="p_other_qualification" value="<?php echo $prow['other_qualification']?>"class="form-control" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Employment Status</label>
                                                <br>
                                                <select class="form-control" name="p_emp_status">
                                                    <option value="">Select</option>
                                                    <option value="public" <?php if($prow['emp_status'] == 'public') echo "selected='' ";  ?>>Public</option>
                                                    <option value="private" <?php if($prow['emp_status'] == 'private') echo "selected='' ";  ?>>Private</option>
													<option value="contract" <?php if($prow['emp_status'] == 'contract') echo "selected='' ";  ?>>Contract</option>
													<option value="self" <?php if($prow['emp_status'] == 'self') echo "selected='' ";  ?>>Self Employment</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Occupation</label>
                                                <br>
                                                <select class="form-control" name="p_occupation">
                                                    <option value="">Select</option>
                                                    <?php 
													$oth = $db->query('SELECT `name` FROM `occupations` ORDER BY `name` ASC');
													while($orow = $oth->fetch()){
														echo '<option ';
														if($prow['occupation'] == $orow['name']) { echo ' selected="" '; }
														echo '>'.$orow['name'].'</option>';
													}
													?>
                                                </select>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Occupation Details</label>
                                                <br>
                                                <textarea rows="3" name="p_designation_details" class="form-control required" placeholder=""><?php echo $prow['designation_details'] ?></textarea>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Annual Income</label>
                                                <br>
                                                <input rows="3" type="text" name="p_annual_income" value="<?php echo $prow['annual_income'] ?>" class="form-control required" placeholder=""/>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Partner Preference</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-sm-12">
                                            <div class="col-sm-12">
                                                <label>About Partner</label>
                                                <br>
                                                <textarea rows="3" name="p_about_partner" class="form-control required" placeholder=""><?php echo $prow['about_partner'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Login Details</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-sm-12">
                                            <div class="col-sm-6">
                                                <label>Email ID</label>
                                                <br>
                                                <input value="<?php echo $prow['email'] ?>" readonly="" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Current Password</label>
                                                <br>
                                                <input type="password" name="p_password" id="p_password" class="form-control" placeholder="">
                                            </div>
                                        </div>
										<div class="col-sm-12">
                                            <div class="col-sm-6">
                                                <label>New Password</label>
                                                <br>
                                                <input type="password" class="form-control" id="p_newpassword" name="p_newpassword" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Confirm New Password</label>
                                                <br>
                                                <input type="password" id="p_newcpassword" equalTo="#p_newpassword" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Contact Details</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-sm-12">
                                            <div class="col-sm-6">
                                                <label>Mobile</label>
                                                <br>
                                                <input value="<?php echo $prow['mobile'] ?>" readonly="" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Phone</label>
                                                <br>
                                                <input type="text" name="p_phone" value="<?php echo $prow['phone'] ?>" class="form-control required" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12" align="center">
                                    <button type="submit" name="action" value="profile_update" class="btn btn-primary profile_update">Update Profile</button>
                                </div>
								</form>
                                    <br>
                                    <br>
                            </div>
                        </div>

                    </div>
                </div>

            </article>
        </section>
        <?php require('pages/footer.php'); ?>
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