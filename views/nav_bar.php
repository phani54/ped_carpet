<?php 
$session_flag = 0;
if(isset($_SESSION['Login_Session']))
{
  $user_info = $db->query("SELECT user_id,name FROM register WHERE guid=".$_SESSION["Login_Session"])->fetch();
  $session_flag = 1;
}
?><!--Desktop Navbar -->
<?php require('popup.php'); ?>
<nav class="navbar navbar-default navbar-fixed-top lv-nav" ng-controller="headerController">
  <div class="container-fluid top-nav">
    <div class="container"> <span class="top-trust pull-left">Call +91-124-265 8600 (India)</span> <span class="top-trust pull-right">support@redcarpetmatrimony.com</span> </div>
  </div>
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed navbar-left" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a href="index.php" class="navbar-brand visible-xs"> <img style="max-width:150px; margin-top: -7px;" src="assets/images/logo2.png"> </a> </div>
    <div class="container"> <a href="index.php" class="navbar-brand hidden-xs"> <img style="max-width:150px; margin-top: -7px;" src="assets/images/logo2.png"> </a>
        
      <div class="mainmenu-lv">
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">MY HOME</a></li>
            <li><a href='javascript:;' onclick="session_check('profile.php')">MY PROFILE</a></li>
            <!-- <li><a href="#">INBOX</a></li> -->
            <li><a href='javascript:;' onclick="session_check('search.php')">SEARCH</a></li>
            <li><a href='javascript:;' onclick="session_check('upgrade.php')">UPGRADE</a></li>
            <li><a href='javascript:;' onclick="session_check('help.php')">HELP</a></li>
            <?php if(isset($_SESSION['Login_Session']))
            {?>
                <li><a href="#"><i class="fa fa-bell"></i></a></li>
                <div class="btn-group" style="margin-top:18px"> <a class="btn dropdown-toggle btn-success" data-toggle="dropdown" href="#"> <i class="fa fa-user"></i> <span class="icon-cog icon-white"></span><span class="caret"></span> </a>
                  <ul class="dropdown-menu">
                    
                        <h6 style="padding:5px;"><b><span style="color:#ce191f"><?php echo ucfirst($user_info['name']);?></span></b> (ID : <?php echo $user_info['user_id'];?>)</h6>
                
                    <li><a href="#"><i class="fa fa-edit"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-cog"></i> Change Password</a></li>
                    <li><a href="<?php echo URL;?>logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
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
<!-- enquirypopup -->