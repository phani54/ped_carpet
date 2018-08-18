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
$filePath = URL.'terms&conditions/'; 
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
			<div class="container">
			<h2 align="center">Terms & Conditions</h2>
<p style="text-align: justify;"><strong>DearUser,</strong><br>Welcome, to RedCarpetMatriomny.Com, the exclusive matrimonial website for the Telugu community. You must register as a member of site (‘Member’) to use RedCarpetMatriomny.Com (‘Site’). Any user or members using the site agree to be bound by these terms and conditions.</p>
<p style="text-align: justify;">RedCarpetMatriomny.Com is owned and operated by the Red Carpet Events &amp; Matrimony Services. The terms Red Carpet Matrimony, referred in this document refer to the web site. The following are the terms and conditions/service agreement for use of the RedCarpetMatriomny.Com and other services (including but not limited to use of this internet website and any other related services). RedCarpetMatriomny.Com reserves the right to do changes to terms and conditions from time to time.  </p>
<h4 style="text-align: justify;">Membership Eligibility:</h4>
<p style="text-align: justify;">To registering on RedCarpetMatriomny.Com, you must be of eligible age as per the law of India (As on now, 21 years for men and 18 years for women).</p>
<p style="text-align: justify;">It’s entirely your responsibility to find your life partner through our site.</p>
<p style="text-align: justify;">Membership is reserved all Community Members. They can be Indian Nationals or Non-Resident Indians or Person of Indian Origin.</p>
<p style="text-align: justify;">Using this Site, you represent and warrant that you have the right, authority, and legal capacity to enter into this Agreement and that you are not prohibited or prevented by any applicable law for the time being in force or any order or decree or injunction from any court, tribunal or any such competent authority restraining you from entering into matrimony. RedCarpetMatriomny.Com reserves the right to forthwith terminate your membership and / or your right to use the Service without any refund of fees.</p>
<p style="text-align: justify;">You will need to provide, true, accurate and current information about yourself for doing the user registration, as well as promptly update the registration information to current. RedCarpetMatriomny.Com has the right to terminate the user account and refuse any all-current or future services of the web site at any time, without notice, for any reason whatsoever.  You understand that RedCarpetMatriomny.Com will not be liable for any loss or damage in any form incurred as a result of unauthorized usage of your account, with or without your knowledge. However, you could be held liable for losses or damages incurred by RedCarpetMatriomny.Com or a third party as a result of your failure to comply with this clause. You also agree not to share your account with others and not to use others account.</p>
<h4 style="text-align: justify;">Code of Conduct and Content:</h4>
<p style="text-align: justify;">RedCarpetMatriomny.Com has no obligation to observe and monitor the services. You agreed that you are solely responsible for the content that you publish on the service. However, RedCarpetMatriomny.Com reserves the right to review and removal of any material posted. RedCarpetMatriomny.Com has right to modify or discontinue, temporarily or permanently, 'The Service' (or any part of 'The Service') with or without notice to the user at any time and from time to time.</p>
<p style="text-align: justify;">You will not post or transmit any content or information [in whatever form they may be contained] that is defamatory, blasphemous, abusive, obscene, sexually oriented, profane, intimidating, illegal or in violation of the rights of any person, including intellectual property rights.</p>
<p style="text-align: justify;">You will not use the site for any kind of promotional campaign, solicitation, marketing, advertising or dealing in any products or services or transmit any chain letters or spam or junk mails.</p>
<p style="text-align: justify;">Your membership will automatically be suspended if you communicate "abusive, obscene or sexually oriented" messages to other members.</p>
<p style="text-align: justify;">Messages sent to members of the opposite gender should be only for the purpose of finding a life partner. You are not allowed to misuse the service in the name of "Dating", "Flirting", "Friendship" etc.</p>
<h4 style="text-align: justify;">Advertisement:</h4>
<p style="text-align: justify;">You agree that RedCarpetMatriomny.Com has a right to serve advertisements and promotions to this site or work with a third party to serve the advertisements. Advertisements placed on the site may include but are not limited to banner ads, paid links, pop-up windows, and sponsorships.</p>
<h4 style="text-align: justify;">Emails:</h4>
<p style="text-align: justify;">RedCarpetMatriomny.Com and/or third parties may, from time to time, send newsletters, email messages to users containing advertisements, special promotions, and other marketing materials ("Email Marketing Programs") based on the agreed terms between RedCarpetMatriomny.Com and its selected partner(s). Users must decide to "opt-in" to our email services during the registration process before they receive any email services, newsletters, or other marketing materials. RedCarpetMatriomny.Com has the right to partner with any email marketers to provide these Email Marketing Programs or Opt-In Email Programs.</p>
<h4 style="text-align: justify;">Privacy Policy:</h4>
<p style="text-align: ;">Web site usage, Content, Registration Information and certain other information about you is subject to our Privacy Policy. You may read our privacy policy at http://www.RedCarpetMatriomny.Com/privacy-policy.php</p>
<h4 style="text-align: justify;">Disclaimer:</h4>
<p style="text-align: ">Web site usage, Content, Registration Information, and certain other information about you is subject to our Disclaimer. </p>
<h4 style="text-align: justify;">Association to Third Party:</h4>
<p style="text-align: justify;">RedCarpetMatriomny.Com may contain links to third party web sites "Linked Sites" ("Affiliates" / "Partner Sites"). These Linked sites are not under the control of RedCarpetMatriomny.Com and we are not responsible for the contents of any linked site, including without limitation any link contained in a linked site, or any changes or updates to a linked site. RedCarpetMatriomny.Com is providing these links and partnerships to you, for your convenience, and the inclusion of any link does not imply endorsement by RedCarpetMatriomny.Com of the site. You are responsible for viewing and abiding by the privacy statements and terms of use posted at the Linked Sites.</p>
<h4 style="text-align: justify;">Cancellation:</h4>
<p style="text-align: justify;">If a user chooses to cancel the membership for any reason, MEMBERSHIP FEES ARE NOT REFUNDABLE</p>
<h4 style="text-align: justify;">General:</h4>
<p style="text-align: justify;">If you do not agree to ANY of the clauses in our terms of service, Disclaimer, Privacy policy your sole remedy is stop using the web site and/or its services.</p>
<p style="text-align: justify;"><strong>Notice</strong></p>
<p style="text-align: justify;">We may change this Privacy Policy from time to time based on your comments or as a result of a change of policy in our company.</p>
<p style="text-align: justify;">If you have any questions regarding our Privacy Statement, please write in to us.</p>
			
		
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