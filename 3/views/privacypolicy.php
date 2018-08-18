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
$filePath = URL.'privacypolicy/'; 
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
			    <h2 align="center">Privacy Policy</h2>

<p>This privacy policy has been compiled to better serve those who are concerned with how their 'Personally Identifiable Information' (PII) is being used online. PII, as described in privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website.</p>

<h4>What personal information do we collect from the people that visit our blog, website or app?</h4>

<p>When ordering or registering on our site, as appropriate, you may be asked to enter your name, email address, mailing address, phone number, Age or other details to help you with your experience.</p>

<h4>When do we collect information?</h4>

<p>We collect information from you when you register on our site, fill out a form, Use Live Chat or enter information on our site.</p>
<p> Provide us with feedback on our products or services&nbsp;</p>
<h4>How do we use your information?</h4>

<p>We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:</p>

<p> <img src="<?php echo IURL ?>images/bulletpoint.png" class="bullet_point">To personalize your experience and to allow us to deliver the type of content and product offerings in which you are most interested.</p>
<p><img src="<?php echo IURL ?>images/bulletpoint.png" class="bullet_point">To allow us to better service you in responding to your customer service requests.</p>
<p><img src="<?php echo IURL ?>images/bulletpoint.png" class="bullet_point">To quickly process your transactions.</p>
<p><img src="<?php echo IURL ?>images/bulletpoint.png" class="bullet_point">To send periodic emails regarding your order or other products and services.</p>
<p><img src="<?php echo IURL ?>images/bulletpoint.png" class="bullet_point">To follow up with them after correspondence (live chat, email or phone inquiries)</p>


<h4>How do we protect your information?</h4>

<p>Our website is scanned on a regular basis for security holes and known vulnerabilities in order to make your visit to our site as safe as possible.</p>
<p>We do not use Malware Scanning.</p>
<p>We do not use an SSL certificate</p>

<p><img src="<?php echo IURL ?>images/bulletpoint.png" class="bullet_point">We only provide articles and information. We never ask for personal or private information like names, email addresses, or credit card numbers.</p>


<h4>Do we use 'cookies'?</h4>

<p>We do not use cookies for tracking purposes</p>
<p>You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser settings. Since browser is a little different, look at your browser's Help Menu to learn the correct way to modify your cookies.</p>

<p>If you turn cookies off, Some of the features that make your site experience more efficient may not function properly.that make your site experience more efficient and may not function properly.</p>

<h4>Third-party disclosure</h4>

<p>We do not sell, trade, or otherwise transfer to outside parties your Personally Identifiable Information.</p>
<h4>We engage in this practice because,:</h4>
<p>Its a Matrimonial site</p>

<h4>Third-party links</h4>

<p>Occasionally, at our discretion, we may include or offer third-party products or services on our website. These third-party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.</p>

<h4>Google</h4>

<p>Google's advertising requirements can be summed up by Google's Advertising Principles. They are put in place to provide a positive experience for users. https://support.google.com/adwordspolicy/answer/1316548?hl=en 
We have not enabled Google AdSense on our site but we may do so in the future.
</p>
<p>We have not enabled Google AdSense on our site but we may do so in the future.</p>


<h4>According to CalOPPA, we agree to the following:</h4>
<p>Users can visit our site anonymously.</p>
<p>Once this privacy policy is created, we will add a link to it on our home page or as a minimum, on the first significant page after entering our website.</p>
<p>Our Privacy Policy link includes the word 'Privacy' and can easily be found on the page specified above.</p>
<p>You will be notified of any Privacy Policy changes:</p>

<p><img src="<?php echo IURL ?>images/bulletpoint.png" class="bullet_point">On our Privacy Policy Page</p>

<p>Can change your personal information:</p>

<p><img src="<?php echo IURL ?>images/bulletpoint.png" class="bullet_point">By emailing us</p>
<p><img src="<?php echo IURL ?>images/bulletpoint.png" class="bullet_point">By logging in to your account</p>

<h4>How does our site handle Do Not Track signals?</h4>
<p>We honor Do Not Track signals and Do Not Track, plant cookies, or use advertising when a Do Not Track (DNT) browser mechanism is in place.</p>
<h4>Does our site allow third-party behavioral tracking?</h4>
<p>It's also important to note that we allow third-party behavioral tracking</p>

<h4>COPPA (Children Online Privacy Protection Act)</h4>

<p>When it comes to the collection of personal information from children under the age of 13 years old, the Children's Online Privacy Protection Act (COPPA) puts parents in control. The Federal Trade Commission, United States' consumer protection agency, enforces the COPPA Rule, which spells out what operators of websites and online services must do to protect children's privacy and safety online.</p>
<p>We market to</p>
<p>We do not collect information from children under 13</p>
<p>children under 13.</p>
<p>Do we let third-parties, including ad networks or plug-ins collect PII from children under 13?</p>
<p>No</p>
<h4>In order to remove your child's information please contact the following personnel:</h4>
<h4>We adhere to the following COPPA tenants:</h4>

<p><img src="<?php echo IURL ?>images/bulletpoint.png" class="bullet_point">Parents can review, delete, manage or refuse with whom their child's information is shared through contacting us directly.</p>

<p>or contacting us directly.</p>

<h4>Fair Information Practices</h4>

<p>The Fair Information Practices Principles form the backbone of privacy law in the United States and the concepts they include have played a significant role in the development of data protection laws around the globe. Understanding the Fair Information Practice Principles and how they should be implemented is critical to comply with the various privacy laws that protect personal information.</p>
<h4>In order to be in line with Fair Information Practices we will take the following responsive action, should a data breach occur:</h4>
<p>We will notify you via email</p>

<p><img src="<?php echo IURL ?>images/bulletpoint.png" class="bullet_point">Within 7 business days</p>

<p>We will notify the users via in-site notification</p>

<p><img src="<?php echo IURL ?>images/bulletpoint.png" class="bullet_point">Within 7 business days</p>

<p>We also agree to the Individual Redress Principle which requires that individuals have the right to legally pursue enforceable rights against data collectors and processors who fail to adhere to the law. This principle requires not only that individuals have enforceable rights against data users, but also that individuals have recourse to courts or government agencies to investigate and/or prosecute non-compliance by data processors.</p>

<p><strong>CAN SPAM Act</strong></p>

<p>The CAN-SPAM Act is a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have emails stopped from being sent to them, and spells out tough penalties for violations.</p>
<h4>We collect your email address in order to:</h4>

<p>Send information, respond to inquiries, and/or other requests or questions</p>
<p>Process orders and to send information and updates pertaining to orders.</p>
<p>Send you additional information related to your product and/or service</p>

<h4>To be in accordance with CANSPAM, we agree to the following:</h4>

<p>Not use false or misleading subjects or email addresses.</p>
<p>Identify the message as an advertisement in some reasonable way.</p>
<p>Include the physical address of our business or site headquarters.</p>
<p>Monitor third-party email marketing services for compliance, if one is used.</p>
<p>Honor opt-out/unsubscribe requests quickly.</p>
<p>Allow users to unsubscribe by using the link at the bottom of each email.</p>

<p><strong> If at any time you would like to unsubscribe from receiving future emails, you can email us at</strong></p>
<p>redcarpet.hyderabad@gmail.com and we will promptly remove you from&nbsp;<strong>ALL</strong>&nbsp;correspondence.</p>

<h4>Public now</h4>

<p>By registering, you are agreed to share your information to third party.</p>

<h4>Contacting Us</h4>

<p>If there are any questions regarding this privacy policy, you may contact us using the information below.</p>
<p>www.redcarpetmatrimony.com</p>
<p>Tarnaka Road, Mettuguda</p>
<p>Hyderabad, Telangna 500017</p>
<p>India</p>
<p>redcarpet.hyderabad@gmail.com</p>
<p>9246282702</p>

<p>PP By CaLOPPA</p>

<br>

<p>Govt. Regd # 1768OF2017</p>
<p class="pull-right"><img src="<?php echo IURL ?>images/privacy.jpg" class="img-responsive"></p>
		
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