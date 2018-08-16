<?php include "inner_header.php";?>
<style>
@import url('https://fonts.googleapis.com/css?family=Pacifico');
input[type=checkbox], input[type=radio] {
	display: inherit !important;
}
.icon-bg-blue {
    background: #ce191f;
    }
    .icon-bg-blue.active{
    background: coral;
    }
.input-group {
	margin-bottom: 15px;
}
.message{width: 100% !important;}
.countbox, .acclist li span.count {
	font: normal 11px Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	background: #398439;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	margin-top: 10px;
	padding: 2px 3px;
}
#inbox {
	height: auto;
	background-color: #fff;
}
#inbox ol, .rlist ol {
	list-style: none;
	margin: 0;
	padding: 0;
	width: 100%;
}
#inbox ol li, .rlist ol li {
	display: block;
	border-bottom: 1px dotted #b6b4b4;
	/* background: url(//imgs.communitymatrimony.com/cbsimages/arrow-gry.png) no-repeat 9px 12px; */
	position: relative;
	padding: 12px 3px 12px 15px;
}
#inbox ol li a, .rlist ol li a {
	font: normal 12px Arial, Helvetica, sans-serif;
	color: #999;
}
.fa-fw {
	width: 1.28571429em;
	text-align: center;
}
#inbox span.countbox, .rlist span.countbox {
	margin-top: 0;
	min-width: 15px;
	text-align: center;
	margin-right: 10px;
}
.fright {
	float: right;
}
</style>
</head>

<body>
<?php 

    $get_shortlist_qry = $db->query("SELECT * FROM profile_interests WHERE shorlist=1 AND viewer_id=".$_SESSION['Login_Session']);
    $shortlist_count = $get_shortlist_qry->rowCount();

    $get_interest_qry = $db->query("SELECT * FROM profile_interests WHERE interest=1 AND viewer_id=".$_SESSION['Login_Session']);
    $interest_count = $get_interest_qry->rowCount();
?>
<section class="main-wrapper container innerpage-content"  style="padding:120px 0px;">
  <article>
    <div class="container">
      <div class="col-sm-3">
        <div align="center"> <a href="#"><img src="<?php echo URL;?>images/my-home-page-banners1.gif" class="img-responsive"/></a> </div>
        <div class="tabbable-panel">
          <h3>Your Activity Board</h3>
          <div class="tabbable-line">
            <div class="tab-content">
              <div class="tab-pane active" id="tab_default_1">
                <div id="inbox" style="display: block;">
                  <ol class="clearfix">
                    <li><a href='javascript:;' onclick='return false;' style='cursor:auto;text-decoration:none'>SMS sent<span class='countbox fright'>0</span></a></li>
                    <li class='last'><a href='javascript:;' onclick='return false;' style='cursor:auto;text-decoration:none'>SMS received <span class='countbox fright'>0</span></a></li>
                  </ol>
                  <div id="msgrecpart" class="rlist" style="display:block;">
                    <ol class="clearfix">
                      <li><a href='javascript:;' onclick='return false;' style='cursor:auto;text-decoration:none'>Members you have interested <span class='countbox fright'><?php echo $interest_count;?></span></a></li>
                      <li><a href='javascript:;' onclick='return false;' style='cursor:auto;text-decoration:none'>Members you have shortlisted <span class='countbox fright'><?php echo $shortlist_count;?></span></a></li>
                      <!-- <li><a  href='javascript:;' onclick='return false;' style='cursor:auto;text-decoration:none'>Members you have blocked <span class='countbox fright'>0</span></a></li>
                      <li><a href='javascript:;' onclick='return false;' style='cursor:auto;text-decoration:none'>Members you have ignored <span class='countbox fright'>0</span></a></li> -->
                      <li><a href='javascript:;' onclick='return false;' style='cursor:auto;text-decoration:none'>Mobile no(s) viewed by you <span class='countbox fright'>0</span></a></li>
                      <li><a href='javascript:;' onclick='return false;' style='cursor:auto;text-decoration:none'>Daily MatchWatch Archive</a></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Tab-content --> 
          </div>
          <!-- End Tabbed-Line --> 
        </div>
      </div>
      <div class="col-sm-7">
        <div id="ResultArea" class="Tabbox tabContainer active" style="padding-top: 0;">
            <?php 
                $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $limit = 10;
                if(isset($_GET['page']) && $_GET['page']!='' && $_GET['page']!=0)
                {
                    $page = $_GET['page'];   
                }
                else
                {
                    $page = 1;
                }
                $condition = "";
                $other_params = '';
                if(isset($_GET) && count($_GET) > 0)
                {
                    if(isset($_GET['similer']) && $_GET['similer']!='' && $_GET['similer']!=0)
                    {
                        $get_profile_info = $db->query("SELECT * FROM `register` WHERE guid=".$_GET['similer']);
                        if($get_profile_info->rowCount() > 0)
                        {
                            $profile_info = $get_profile_info->fetch();
                            $condition = " AND (txtCity LIKE '%".$profile_info['txtCity']."%' OR txtCaddress LIKE '%".$profile_info['txtCaddress']."%' OR txtAge='".$profile_info['txtAge']."' OR txtHeight LIKE '%".$profile_info['txtHeight']."%' OR dnation='".$profile_info['dnation']."' OR txtEducation='".$profile_info['txtEducation']."' OR txtOccupation='".$profile_info['txtOccupation']."')";
                            $other_params = 'similer='.$_GET['similer'].'&';
                        }
                    }
                }
                $get_rows = $db->query("SELECT * FROM `register` WHERE gender='".$_SESSION['show_gender']."' AND guid!=".$_SESSION['Login_Session']." $condition");
                $paging = make_pages($page,$limit,$get_rows->rowCount(),'dashboard.php',$other_params);
                $page = $limit*($page-1);
                $rth = $db->query("SELECT * FROM `register` WHERE gender='".$_SESSION['show_gender']."' AND guid!=".$_SESSION['Login_Session']." $condition ORDER BY `dateandtime` DESC limit $page,$limit");
                while($row = $rth->fetch())
                {
                    if($row['txtOccupation']!=0)
                    {
                        $accupation_qry = $db->query("SELECT `name` FROM `occupations` WHERE guid=".$row['txtOccupation'])->fetch();
                        $accupation =  $accupation_qry['name'];
                    }
                    else
                    {
                        $accupation = 'N/A';
                    }
                    if($row['dnation']!=0)
                    {
                        $dnation_qry = $db->query("SELECT `name` FROM `denominations` WHERE guid=".$row['dnation'])->fetch();
                        $dnation =  $dnation_qry['name'];
                    }
                    else
                    {
                        $dnation = 'N/A';
                    }

                    $interest = 0;
                    $sms = 0;
                    $shortlist = 0;
                    $interest_qry = $db->query("SELECT * FROM profile_interests WHERE viewer_id='".$_SESSION['Login_Session']."' AND profile_id=".$row['guid']);
                    if($interest_qry->rowCount() > 0)
                    {
                        $res = $interest_qry->fetch();
                        $interest = $res['interest'];
                        $sms = $res['sms'];
                        $shortlist = $res['shorlist'];
                    }
                    
             ?>
          <div class="srch-profile-contents">
            <div class="profContainer profile-srch bgclr5 srcbdr posrelative" style="cursor:pointer; margin-bottom:25px; background-color:#fff">
              <div class="padt10 padl10 padb10 padr5">
                <div>
                  <div class="fleft padt5 padr5"><a  class="clr6 font14  boldtxt"><?php echo $row['user_id'];?></a></div>
                  <div class="fleft padl4 padt4 padr8 mediumtxt clr15">|</div>
                  <div class="fleft padt4 mediumtxt clr5"><span class="clr7">Profile Created for</span> <?php echo $row['profilefor'];?></div>
                  <div class="fright mediumtxt padt3" style="padding-right:40px;" ><span><a class="clr6 srch-line" href="javascript:;">Mark as Viewed</a></span><span class="padl8 padr8 clr15">|</span><span><?php 
                    $link = preg_replace("~(\?|&)similer=[^&]*~","",$link); 
                    if(strpos($link,'?') !== false)//exists
                    {
                        $link = preg_replace("~(\?|&)page=[^&]*~","",$link); 
                        $link = str_replace(".php&", ".php", $link);
                        $link = $link."?page=1&similer=".$row['guid'];
                    }
                    else
                    {
                        $link = $link."?page=1&similer=".$row['guid'];
                    }
                    ?><a href='<?php echo $link; ?>' class="clr6 srch-line">View Similar Profiles</a></span> </div>
                  <div class="clear"></div>
                </div>
                <div class="fleft padt10 col-sm-3">
                  <div class="ph-imgbg bgclr5 txt-center">
                    <div class="pad10"><a href="">
                      <div class="posrelative">
                        <div><img width="150" height="150" border="0" src="<?php echo URL;?>adminupload/<?php echo $row['txtImage1'];?>"></div>
                      </div>
                      </a>
                     
                    </div>
                  </div>
                </div>
                <div class="fleft padl10 col-sm-9" >
                  <div class="fleft mediumtxt" >
                    <div class="font16 boldtxt padl2 padt20 padb15"><a href="#" class="clr9" ><?php echo ucwords($row['name']) ;?></a></div>
                    <div class="clr5 padb10"><i class="fa fa-map-marker"></i> <?php echo ucfirst($row['txtCity']);?>, <?php echo substr(ucfirst($row['txtCaddress']),0,11);?>, In..</div>
                  </div>
				  
                <div class="fleft padt20" style="float: right;"> 
                    <span   <?php if($interest ==0) { ?> class="icon-bg-blue" onclick="sent_intrest(<?php echo $row['guid'];?>)" style="cursor: default !important;"  title="Send Interest?"<?php } else { ?> class="icon-bg-blue active" title="Interest Sent" <?php } ?> id="intrest_<?php echo $row['guid'];?>">
                        <a href='javascript:;' onclick='return false;'>
                            <span class="msgIcon-on">
                                <i class="fa fa-heart" style="color:#fff"></i>
                            </span>
                        </a>
                    </span>

                    <span <?php if($sms ==0) { ?> class="icon-bg-blue" title="View Number/Send SMS" onclick="view_mobile(<?php echo $row['guid'];?>)" <?php } else {?> class="icon-bg-blue active" title="Number Viewed" style="cursor: default !important;" <?php } ?> id="mobile_<?php echo $row['guid'];?>">
                        <a href='javascript:;' onclick='return false;'>
                            <span class="msgIcon-on">
                                <i class="fa fa-mobile" style="color:#fff;padding-left: 5px;"></i>
                            </span>
                        </a>
                    </span>

                    <span <?php if($shortlist ==0) { ?> class="icon-bg-blue posrelative" title="Shortlist" onclick="shortlist(<?php echo $row['guid'];?>)" <?php } else { ?> class="icon-bg-blue posrelative active" title="Shortlisted" style="cursor: default !important;" <?php } ?> id="shortlist_<?php echo $row['guid'];?>">
                        <a href='javascript:;' onclick='return false;'>
                            <span class="msgIcon-on">
                                <i class="fa fa-user" style="color:#fff"></i>
                            </span>
                        </a>
                    </span>                   
                    <!-- </span><span class="icon-bg"><span class="activity-icon"><span class="clr7"><i class="fa fa-clock-o"></i> Last Online </span><br>
                    <a class="clr5" style="cursor:auto;">2 hrs ago</a></span> -->
                </div>
                  <br clear="all">
                  <div class="src-user-data clearfix">
                    <div class="userdata-left fleft">
                      <ul>
                        <li> <span class="input-field">Age, Height </span> <span class="input-data"><?php echo $row['txtAge'];?> yrs, <?php echo $row['txtHeight'];?></span> </li>
                        <li><span class="input-field">Denomination</span><span class="input-data"><?php echo ucfirst($dnation);?></span></li>
                        <li><span class="input-field">Education</span><span class="input-data"><?php echo $row['txtEducation'];?></span></li>
                        <li><span class="input-field">Occupation</span><span class="input-data"><?php echo $accupation;?></span></li>
                      </ul>
                    </div>
                  </div>
                  <br clear="all">
                  <div class="dot-step padb3"><!--  --></div>
                  <div class="src-user-data">
                    <div class="userdata-left">
                      <ul>
                        <li><a href="" class="clr6 srch-line"> View Full Profile</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <br clear="all">
              </div>
             
            </div>
          </div>
          <?php } 
             ?>
        </div>
        <?php echo $paging;?>
      </div>
     
	 
	 <div class="col-sm-2">
		 <div align="center" style="margin-bottom:20px;"> <a href="#"><img src="<?php echo URL;?>images/img1.jpg" class="img-responsive" style="display:block;"/></a> </div>
		 <div align="center" style="margin-bottom:20px;"> <a href="#"><img src="<?php echo URL;?>images/img2.jpg" class="img-responsive" style="display:block;"/></a> </div>
		 <div align="center" style="margin-bottom:20px;"> <a href="#"><img src="<?php echo URL;?>images/img3.jpg" class="img-responsive" style="display:block;"/></a> </div>
	 </div>
	 
    </div>
  </article>
</section>
<?php require 'footer.php'; ?> 
<?php require 'popup.php'; ?>
<script>
    function sent_intrest(id)
    {
        
        $.ajax({
            url: "<?php echo URL ?>server/server.php",
            data: {profile_id:id,action:'sent_intrest'},
            type:'POST',
            datatype:'json',
            success : function(response)
            {
                var response =JSON.parse(response);
                if(response['status']=='success')
                {
                    $('#intrest_'+id).toggleClass("active");
                    successToastAuto("Intrest sent");
                }
                else
                {

                }
            }
        })
    }
    function view_mobile(id)
    {
        $.ajax({
            url: "<?php echo URL ?>server/server.php",
            data: {profile_id:id,action:'view_mobile'},
            type:'POST',
            datatype:'json',
            success : function(response)
            {
                var response =JSON.parse(response);
                if(response['status']=='success')
                {
                    $('#mobile_'+id).toggleClass("active");
                    successToastAuto("Mobile view request sent");
                }
                else
                {
                    $('#err_msg').addClass('lv-alert alert-danger');
                    $('#err_msg').text('In-valid credentials');
                }
            }
        })
    }
    function shortlist(id)
    {
        $.ajax({
            url: "<?php echo URL ?>server/server.php",
            data: {profile_id:id,action:'shortlist'},
            type:'POST',
            datatype:'json',
            success : function(response)
            {
                var response =JSON.parse(response);
                if(response['status']=='success')
                {
                    $('#shortlist_'+id).toggleClass("active");
                    successToastAuto("Profile shortlisted");
                }
                else
                {
                    $('#err_msg').addClass('lv-alert alert-danger');
                    $('#err_msg').text('In-valid credentials');
                }
            }
        })
    }

	$(document).ready(function() {

        
		var owl = $('.matcheRecievedsall');
		owl.owlCarousel({
			margin: 10,
			nav: true,
			loop: false,
			animateOut: 'slideOutDown',
			animateIn: 'fadeIn',			
			responsive: {
				0: {
                    items: 1
				},
				320: {
                    items: 1
				},
				375: {
                    items: 1
				},				  
				480: {
                    items: 1
				},
				768: {
                    items: 1
				},
				992: {
                    items: 1
				}
			}
		})
	});
	
</script> 
<script type="text/javascript">
    $(document).click(function(e) {		
		if (!$(e.target).is('a')) {
			$('#navbar').collapse('hide');			
		}
	});
	/* for chat popup----dont remove */
	$(window).on('load', function() {
		if($(window).width() > 480) {
			$('.opencometchat').addClass('cometchat_profile');
			$('.opencometchat').removeClass('cometchat_ccmobiletab_redirect_custom');
			$('.cometchat_profile').unbind('click');
			$('.cometchat_profile').bind('click', function(e){
				jqcc.cometchat.userClick(e.target,0);
			});
		}else{
			$('.opencometchat').addClass('cometchat_ccmobiletab_redirect_custom');
			$('.opencometchat').removeClass('cometchat_profile');
			$('.cometchat_ccmobiletab_redirect_custom').unbind('click');
			$('.cometchat_ccmobiletab_redirect_custom').bind('click',function(e){
				var userId = $(e.target).attr('id');
				userId = userId.substr(19);
				jqcc.ccmobiletab.chatWith(userId);
			});
		}
	});
	/* for chat popup----dont remove */	
	
</script> 
<!-- <script type="text/javascript" src="<?php echo URL ?>assets/app/pagecontent2dac.js?v=21"></script>  -->
<script type="text/javascript">  
	$(document).ready(function () {
		$('.myButton').click(function(){   
			$(this).find('i').toggleClass('fa-plus-circle fa-minus-circle')
		});	
	 });
	$(document).click(function() {
	  var className = $('#myNavbar').attr('class');
	  if('navbar-collapse collapse in'){
		$('#myNavbar').removeClass( "navbar-collapse collapse in" ).addClass( "navbar-collapse collapse");
		}   
	}); 
    </script>
</body>
</html>
