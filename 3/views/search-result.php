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
$filePath = URL.'search-result/'; 
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
							</div><br>
							<img src="<?php echo IURL ?>images/ad.jpg" class="img-responsive">
							
							<br>
							
							<div class="panel panel-warning">
								<div class="panel-heading">
									<h3 class="panel-title">Latest Profiles </h3> 
								</div>
								<div class="panel-body">
									<!--div class="row recent">
										<div class="col-sm-5 no-padd"><img src="<?php //echo IURL ?>assets/images/bride_1.jpg" class="img-responsive"></div>
										<div class="col-sm-7"><b>Sri Latha</b><br>ID: RC12345<br>Hyderabad<br><a href=""><small><b>View Profile</b></small></a></div>
									</div-->
								</div>
							</div>
						</div>
						<div class="col-sm-9">
							<?php if($total > 0){
							function cm2feet($cm)	
							{
								 $inches = $cm/2.54;
								 $feet = intval($inches/12);
								 $inches = $inches%12;
								 return sprintf('%d.%d"', $feet, $inches);
							}
							if($_GET['looking_for'] == 'male'){
								$gender_photo = 'male_large.jpg';
								$title = 'him';
							} else if($_GET['looking_for'] == 'female'){
								$gender_photo = 'female_large.jpg';
								$title = 'her';
							}
							while($prow = $sth->fetch()){
							?>
							<div class="panel panel-warning">
								<div class="panel-heading">
									<h3 class="panel-title"><?php echo $prow['name'] ?> <span class="pull-right">ID: <?php echo $prow['reg_id'] ?></span></h3>
								</div>
								<div class="panel-body">
									<div class="col-sm-3">
										<img src="<?php if(!empty($prow['image_1']) && file_exists('profile_images/'.$prow['image_1'])) echo IURL.'profile_images/'.$prow['image_1']; else echo IURL.'assets/images/'.$gender_photo; ?>" class="img-responsive img-border"/><br>
										
									</div>
									<div class="col-sm-6">
										<i class="fa fa-map-marker icon-big"></i> <b class="text-light">Address Location</b><br>
										<p class="padd-l text-dark"><b><?php echo $prow['caddress'] ?></b></p>
										
										<p><i class="fa fa-map-marker icon-big text-white"></i> <b class="text-light">Age:</b> <b class="text-dark"><?php echo $prow['age'] ?></b> &emsp; <b class="text-light">Height:</b> <b class="text-dark"><?php echo cm2feet($prow['height']).' / '.$prow['height'] ; ?> cm</b> </p>
										
										<p><i class="fa fa-map-marker icon-big text-white"></i> <b class="text-light">Denomination:</b> <b class="text-dark"><?php echo $prow['caste'] ?></b> </p>
										
										<p><i class="fa fa-map-marker icon-big text-white"></i> <b class="text-light">Division:</b> <b class="text-dark"><?php echo $prow['division'] ?></b> </p>
										
										<p><i class="fa fa-map-marker icon-big text-white"></i> <b class="text-light">Education:</b> <b class="text-dark"><?php echo $prow['edu_qualification'] ?></b> </p>
										
										
									</div>
									<div class="col-sm-3">
										<a href="" class="c-icon"><i class="fa fa-phone"></i></a>&emsp; 
										<a href="" class="c-icon"><i class="fa fa-envelope"></i></a><br><br><br>
										<p>
											<b class="text-light"><i class="fa fa-clock-o text-red"></i> Last Seen</b><br>
											<b class="text-dark"><?php echo date('h:ia d-m-y', strtotime($prow['activity_time']))?></b>
										</p><br>
										<p><b>Interested in <?php echo ucfirst($title);?>?</p>
										<a href=""><button type="submit" class="btn btn-success " id="HP_Banner_Register_CTA">Yes</button></a>
										<a href=""><button type="submit" class="btn btn-primary " id="HP_Banner_Register_CTA">No</button></a>
									</div>
								</div>
							</div>
							<?php } ?>
							<div style="pull-right">
							  <ul class="pull-right pagination pagination-sm ">
								<li>
								  <?php make_pages($page,$limit,$total,$filePath,$otherParams); ?>
								</li>
							  </ul>
							</div>
							<?php } else { ?>
							<div class="panel panel-warning">
								<font color="red">No Items(s) found</font>
							</div>
							<?php }?>
						</div>
					</div>
				</div>
		  </div>
				
				
		</article>
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