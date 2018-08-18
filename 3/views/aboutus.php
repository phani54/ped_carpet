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
$filePath = URL.'aboutus/'; 
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
			<div class="container ">
				<div class="col-md-9">
				<h3>&nbsp;WHO WE ARE</h3>
				<p class="text-justify">RED CARPET is an Event Management Firm, established in Hyderabad in the year 2010 with a team of Young, Creative, Dynamic and dedicated professionals. It is widely recognized as one of the best solution provider in Hyderabad and poised to spread across all major cities in INDIA and Globally.<br>

We have pushed all areas of EVENTS MANAGEMENT to new frontiers whether it is Corporate Events, Exhibitions, Academic Programs, Weddings or any Personal Occasions, we are a “ONE STOP SHOP” for every requirement of our wide spectrum</p>
<br><h3>&nbsp;WHAT WE BELIEVE
</h3>
				<p class="text-justify">There is no better business referral than that is given by a satisfied client.<br>

To remain “First in Mind – First in Choice”, we always discuss our clients requirements to understand their objectives and deliver solutions that meet and often exceed their expectations.
</p><br>
				<h3>&nbsp;WHY RED CARPET MATRIMONY</h3>
				
				<ul>
				<li>24/7 Online services</li>
				<li>Easy Sign Up &amp; Login</li>
				<li>Get SMS Alerts</li>
				<li>Free Registration &amp; Attractive Affordability Packages</li>
				<li>Highly secured data management</li>
				<li>Easy search options</li>
				<li>Contact genuine profiles with 100% verified mobile numbers</li>
				<li>Contact genuine profiles with 100% verified mobile numbers</li>
				<li>Easy Upload &amp; Edit / Handle Your Own Dashboard</li>
				<li>View Contact Details for Paid members</li>
				<li>Registered by Government</li>
				<li>Marriage &amp; Family Counseling</li>
				<li>Event Management</li>
				<li>Wedding Planners &amp; Vendors available</li>
				</ul>
				
				</div>
				
				<div class="col-md-3">
				<img src="<?php echo IURL ?>images/Just dail fb1.jpg" class="img-responsive">
				<img src="<?php echo IURL ?>images/coustomer.jpg" class="img-responsive">
				<img src="<?php echo IURL ?>images/clients.jpg" class="img-responsive">
				</div>
				<div class="clearfix"></div>
				<div class="col-md-12">
				<br><br>
					<h5>social responsibility </h5>
					<h3>We Support Swachh Bharat Abhiyaan: </h3>
				<b>7 Facts You Should Definitely Know About The Campaign:</b>
				<p class="text-justify">Swachh Bharat Abhiyan (SBA) is an initiative by the Modi administration towards a cleaner India. The main aim of Swachh Bharat Abhiyan is to eliminate open defecation, which it plans to achieve by the end of 2019. For this, the government is deploying over 12 million toilets in rural India at a projected cost of Rs 1.96 lakh crore. The campaign was officially kickstarted  on the birth anniversary of Mahatma Gandhi on October 2, 2014 by PM Narendra Modi. SBA has been termed as the biggest cleanliness drive in India with over 3 million government employees, school and college students involved in the project.<br>
The program has also received funding and technical support from the World Bank. A total of $1.3billion was allocated to them for the project in the 2016 Union budget of India. The government is in the process of deploying a nationwide real-time monitoring system for toilets under the program.<br>

As of November 30, 2016, Total Sanitation Coverage throughout India has risen to 57.56% up from 42.02% since the day Swachh Bharat Abhiyan was launched.</p><br>
<b>Here are 7 facts:</b><br><br>

<p class="text-justify">1. The national campaign led by the Government of India is covering 4041 statutory towns across India and aims to make the streets, roads and infrastructure clean by October 2, 2019 (Mahatma Gandhi's 150th birth anniversary) <br>


 2. The mission is estimated to cost around 62,009 crore rupees, of which 14,623 crore rupees will be borne by the Union Government <br>
3. The urban component of the mission is being implemented by the Union Ministry of Urban Development and is India's biggest ever cleanliness drive. Around three million government employees and school and college students of India participated in the event in its initial phase. However, the rural component of the mission will be implemented by Union Ministry of Drinking Water and Sanitation <br>

4. The mission was started by Prime Minister Modi, who, on December 25, 2014, nominated nine famous personalities for the campaign. They took up the challenge and nominated nine more people. Thereafter, it has been carried forward with people from all walks of life joining it. The nine public figures selected by Modi to propagate the mission include:<br>

Comedian Kapil Sharma, Former captain of Indian cricket team Sourav Ganguly, Former IPS officer Kiran Bedi, Padmanabha Acharya, Nagaland Governor Sonal Mansingh, classical dancer Ramoji Rao of Eenadu group and Aroon Purie of the India Today group
<br>

 5. The goal also includes the elimination of open defecation, conversion of insanitary toilets to pour flush toilets, eradicating of manual scavenging and Municipal Solid Waste Management (MSWM). 
Major components of the goal:<br>

a) Construction of individual sanitary latrines for households below the poverty line with subsidy (80 percent) where demand exists<br>

b) Conversion of dry latrines into low-cost sanitary latrines<br>

c) Construction of exclusive village sanitary complexes for women providing facilities for hand pumping, bathing, sanitation and washing on a selective basis where there is not adequate land or space within houses and where village panchayats are willing to maintain the facilities<br>

d) Setting up of sanitary marts<br>

e) Total sanitation of villages through the construction of drains, soakage pits, solid and liquid waste disposal
<br>
f) Intensive campaign for awareness generation and health education to create a felt need for personal, household and environmental sanitation facilities.<br>

This would cover 1.04 crore households, provide 2.5 lakh seats of community toilets, 2.6 lakh seats of public toilets and solid waste management facility for all towns.<br> 

6. History: With effect from April 1, 1999, the Government of India restructured the Comprehensive Rural Sanitation Programme and launched the Total Sanitation Campaign (TSC).<br>
To give a fillip to the TSC, effective June 2003, the government launched an incentive scheme in the form of an award for total sanitation coverage, maintenance of a clean environment and open defecation-free panchayat villages, blocks and districts, called Nirmal Gram Puraskar.<br>

Effective April 1, 2012, the TSC was renamed to Nirmal Bharat Abhiyan (SBA). On October 2, 2014 the campaign was relaunched as Swachh Bharat Abhiyan<br>

7. A Swachh Bharat Run was organised at the Rashtrapati Bhavan on October 2, 2014. According to a statement from the Rashtrapati Bhavan, around 1500 people participated and the event was flagged off by President Pranab Mukherjee. Participants in the run included officers and their families.</p><br>
				<h4>Committed to Sustainable Services……</h4>
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