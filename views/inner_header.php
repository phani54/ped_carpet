<?php 

session_start();
require "../lib/config.php";
require "../lib/pageing.php";
require "../lib/path.php";
require "../lib/Bootstrap.php";

$session_flag = 0;
if(isset($_SESSION['id']))
{
  $user_info = $db->query("SELECT `profile_id`,`name` FROM profiles WHERE id=".$_SESSION["id"])->fetch();
  $session_flag = 1;
}

?>
<!doctype html>
<html class="no-js" prefix="ng: https://angularjs.org">
<head> 
    <meta charset="UTF-8">    
    <meta name="fragment" content="!" >  
    <title>Redcarpet Matrimony</title>    
    <meta name="description" content="Red Carpet Matrimony" />
    <meta name="keywords" content="Red Carpet Matrimony" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Tangerine:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300|Roboto:300,400,400i,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Squada+One" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL;?>assets/fontawesome/css/font-awesome.min.css" media="screen" type="text/css" /> 
    <link rel="icon" href="<?php echo URL;?>assets/images/icons/favicon_medium.png" type="image/png" >    
    <link rel="stylesheet" href="<?php echo URL;?>assets/css/bootstrap/css/bootstrap.min7b30.css?v=4" media="screen" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL;?>assets/css/bootstrap/css/bootstrap-select.min7b30.css?v=4" media="screen" type="text/css" />   
    <link rel="stylesheet" href="<?php echo URL;?>assets/css/overridec2e2.css?v=41" media="screen" type="text/css" /> 
    <link rel="stylesheet" href="<?php echo URL;?>assets/css/owl-carousel/owl.carousel.min8d0c.css?v=26" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL;?>assets/css/owl-carousel/owl.theme.default.min8d0c.css?v=26" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL;?>assets/css/animate2.min.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL;?>assets/css/custom7efa.css?v=45" media="screen" type="text/css" />
    <link rel="stylesheet" href="<?php echo URL;?>assets/css/jquery-ui.css" media="screen" type="text/css" />
    <!-- <link rel="stylesheet" href="<?php echo URL;?>assets/css/multi-select.css" type="text/css" /> -->
    <script src="<?php echo URL ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo URL ?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo URL ?>assets/js/jquery-ui.js"></script>
    <script src="<?php echo URL ?>assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo URL ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- <script src="<?php echo URL ?>assets/app/HomeApp7893.js"></script> -->
    <script src="<?php echo URL ?>assets/js/pagescripts.js"></script>
    <script type="text/javascript" src="<?php echo URL ?>assets/js/bootstrap/bootstrap-select.min.js"></script> 
    <script type="text/javascript" src="<?php echo URL ?>assets/js/main7893.js?v=24" ></script> 
    <!--<script type="text/javascript" src="https://www.lovevivah.com/assets/js/slick/slick.js"></script> --> 
    <script type="text/javascript" src="<?php echo URL ?>assets/js/select2/select2.min.js" ></script> 
    <script type="text/javascript" src="<?php echo URL ?>assets/js/commonfc7a.js?v=29"></script> 
    <!-- <script type="text/javascript" src="<?php echo URL ?>assets/js/jquery.multi-select.js"></script>  -->
    <script type="text/javascript" src="<?php echo URL ?>assets/js/multiselect.min.js"></script> 
    <script type="text/javascript">
        $(document).ready(function () {
            NewAccount.Screen.Self.init()        
            Account.Screen.ReligionCaste.init()

        }); 
    </script> 
    <script src="<?php echo URL ?>assets/js/slick/slick.js"></script> 
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug --> 
    <script src="<?php echo URL ?>assets/js/owl-carousel/owl.carousel.js"></script> 
    <script src="<?php echo URL ?>assets/js/simpleToastMessage.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Pacifico');
        input[type=checkbox], input[type=radio] 
        {
            display: inherit !important;
        }
        .input-group 
        {
            margin-bottom: 15px;
        }
        .error{color: #ed3237;font-size: 13px;}
    </style>
</head>
<body>   
<!--Desktop Navbar -->
<nav class="navbar navbar-default navbar-fixed-top lv-nav" ng-controller="headerController">
  <div class="container-fluid top-nav">
    <div class="container"> <span class="top-trust pull-left">Call +91-124-265 8600 (India)</span> <span class="top-trust pull-right">support@redcarpetmatrimony.com</span> </div>
  </div>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed navbar-left" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="index.php" class="navbar-brand visible-xs"> <img style="max-width:150px; margin-top: -7px;" src="<?php echo URL;?>assets/images/logo2.png"> </a> </div>
    <div class="container"> <a href="<?php echo URL;?>index.php" class="navbar-brand hidden-xs"> <img style="max-width:150px; margin-top: -7px;" src="<?php echo URL;?>assets/images/logo2.png"> </a>
        
      <div class="mainmenu-lv">
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">MY HOME</a></li>
            <li><a href='javascript:;' onclick="session_check('profile.php')">MY PROFILE</a></li>
            <!-- <li><a href="#">INBOX</a></li> -->
            <li><a href='javascript:;' onclick="session_check('search.php')">SEARCH</a></li>
            <li><a href='javascript:;' onclick="session_check('upgrade.php')">UPGRADE</a></li>
            <li><a href='javascript:;' onclick="session_check('help.php')">HELP</a></li>
            <?php if(isset($_SESSION['id']))
            {?>
                <li><a href="#"><i class="fa fa-bell"></i></a></li>
                <div class="btn-group" style="margin-top:18px"> <a class="btn dropdown-toggle btn-success" data-toggle="dropdown" href="#"> <i class="fa fa-user"></i> <span class="icon-cog icon-white"></span><span class="caret"></span> </a>
                  <ul class="dropdown-menu">
                    
                        <h6 style="padding:5px;"><b><span style="color:#ce191f"><?php echo ucfirst($user_info['name']);?></span></b> (ID : <?php echo $user_info['profile_id'];?>)</h6>
                
                    <li><a href="#"><i class="fa fa-edit"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> Change Password</a></li>
                    <li><a href="<?php echo URL_VIEW;?>logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
                  </ul>
                </div>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>
<script type="text/javascript">
    function session_check(location)
    {
        flag = '<?=$session_flag;?>';
        if(flag == 0)
        {
            $('#loginModal').modal('show');
        }
        else
        {
            window.location = location;
        }
        // alert(location)
    }
</script>