<?php ob_start(); error_reporting(0);
require "lib/config.php";
require "lib/pageing.php";
$limit =50; 								
if($page) 
    $start = ($page - 1) * $limit; 			
else{
	$start = 0;		
	$page=1;
}					
$filePath = URL.'contact/'; 
$srr='';
$ser = '';
if(isset($_GET) && $_GET['search']=='profile_search'){
	unset($_GET['search']);
	$ser .="search=profile_search&";
	if(!empty($_GET['looking_for'])){
		$srr.= "`gender`= '".$_GET['looking_for']."' AND ";
		$ser.="looking_for=".$_GET['looking_for']."&";
	}
	if(!empty($_GET['religion'])){
		$srr.= "`religion`LIKE '%".$_GET['religion']."%' AND ";
		$ser.="religion=".$_GET['religion']."&";
	}
	if(!empty($_GET['age_from']) && !empty($_GET['age_to'])){
		$srr.= "`age` BETWEEN ".$_GET['age_from']." AND ".$_GET['age_to']." AND ";
		$ser.="age_from=".$_GET['age_from']."&age_to=".$_GET['age_to']."&";
	} else if(!empty($_GET['age_from'])){
		$srr.= "`age` > '".$_GET['age_from']."' AND ";
		$ser.="age_from=".$_GET['age_from']."&age_to=";
	} else if(!empty($_GET['age_to'])){
		$srr.= "`age` < '".$_GET['age_to']."' AND ";
		$ser.="age_from=&age_to=".$_GET['age_to']."&";
	}
	$srr;
	$ser;
	if(!empty($srr)){
		$srr = "WHERE ".substr($srr,0,-4);
	}
	if(!empty($ser)){
		$ser = substr($ser,0,-1);
	}

} else {
	$srr='';
	$ser='';
}

$sth = $db->query ("SELECT * FROM `register` $srr ORDER BY `guid` DESC LIMIT $start,$limit");
$tth = $db->query ("SELECT * FROM `register` $srr");
$total = $tth->rowCount();
$otherParams=$ser;
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
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="icon" href="<?php echo IURL ?>assets/images/icons/favicon_medium.png" type="image/png">
    <link rel="stylesheet" href="<?php echo IURL ?>assets/css/bootstrap/css/bootstrap.min7b30.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="<?php echo IURL ?>assets/css/style2dac.css?v=21" type="text/css" />
    <link rel="stylesheet" href="<?php echo IURL ?>assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo IURL ?>assets/css/jquery.mCustomScrollbar.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo IURL ?>css/side-menu.css" type="text/css" />
</head>

<body>
    <!--Header Start-->
    <?php require('pages/header.php'); ?>
        <!--Header End-->
		
	<img src="<?php echo IURL ?>images/banner-inner.jpg" class="img-responsive">

	<br><br>
	<section class="countact-us-section contact-us-reverse-section" id="contactform">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="contact-block">
								
                                    <div class="contact-block-heading">
                                        
                                        <img src="<?php echo IURL ?>images/RedCarpetBusinessPage_QR.png" class="img-responsive"><br><br>
										<h3 style="font-weight:bold;">Payment Through</h3>
										<img src="<?php echo IURL ?>images/payment.jpg" class="img-responsive"><br><br><br>
										<h3 style="font-weight:bold;">WE' SUPPORT SWACHH BHARAT...</h3>
										<img src="<?php echo IURL ?>images/swatch.png" class="img-responsive">
										<br><br>
										
										
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7 col-md-offset-1 col-sm-6">
                        <div class="contact-form">
                            <div class="col-md-12">
                                <div class="form-heading">
                                    <h3><b>SEND MESSAGE</b></h3><br>
                                </div>
                            </div>
                            <form method="post" action="#">
                                <div id="response"></div>
                                <div class="row"> 
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="firstName" id="firstName" placeholder="YOUR NAME*" class="form-control required" required="">
                                        </div>
                                    </div>
                                   <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="phone" placeholder="PHONE NO.*" class="form-control number required" minlength="10" maxlength="10" onkeypress="return isNumber();" required="">
                                        </div>
                                    </div> 
									<div class="clearfix"></div>
                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select name="sub" class="form-control required" required="">
											<option value="">SELECT*</option>
											<option>Matrimony</option>
											<option>Events</option>
											<option>Franchise</option>
											<option>Advertise</option>
											<option>Others</option>
											</select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control required" name="msg" id="message" minlength="15" placeholder="MESSAGE*" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="margin-top: -10px;margin-bottom: 30px;">
                                        <div class="form-group"> 
                                            
                                        <input class=" button btn btn-primary pull-right" style="padding: 0 60px; margin-top:10px;" type="submit" name="Submit" value="Send Message"></div>
                                    </div>
									<hr>
									 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12439.133548463704!2d78.507610296058!3d17.433785075615884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9a2c6cd0f9cf%3A0x943605b8b3eea7a6!2sRED+CARPET+EVENTS!5e0!3m2!1sen!2sin!4v1506433143205" width="100%" height="260" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>


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
		/*$(function(){
			$('.custom-option').change(function(){
				alert('hi');
				if($(this).val() !=''){
					var ageTo = '';
					for(var i = Number($(this).val()); i <= 70; i++){
						ageTo +='<option value="'+i+'">'+i+' yrs</option>';
					}
					$('#agetTO').html(agetTO);
				}
			});
		});*/

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