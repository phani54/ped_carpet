<?php ob_start(); error_reporting(0);
require "lib/path.php";
require "lib/config.php";
require "lib/title.php";
require "lib/secure.php";
//require "lib/authsecure.php";

extract($_GET);
extract($_POST);
if(isset($_POST) && $_POST['submit'] == 'add') {
	
	$date = date('Y-m-d');
	//print_r($_POST); exit;
	$username = stripslashes($_POST['Username']);
	$name = stripslashes($_POST['Name']);
	$phone = stripslashes($_POST['Phonenumber']);
	$address = stripslashes($_POST['Address']);
	$city = stripslashes($_POST['City']);
	$area = stripslashes($_POST['Area']);
    
	$useremail = $_POST['Useremail'];
	//$newpassword = stripslashes($_POST['Userpassword']);
    $newpassword = "123456";
	$securitykey = uniqid();
	//$role = "employee";

	$encpassword = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($securitykey), $newpassword, MCRYPT_MODE_CBC, md5(md5($securitykey))));
	$sth = $db->query ("INSERT INTO `de_register`(`name`, `city`, `area`, `password`,`phone`,`address`, `securitykey`, `email`, `date`, `status`) VALUES ('$name', '$city', '$area', '$encpassword', '$phone','$address','$securitykey', '$useremail', '$date', 'Pending')");
	if($sth > 0) {
	$post_msg = '<h4 style="color: green;">Profile Successfully Created</h4>';	
	header('location:'.URL.'profiles.php?post_msg='.$post_msg);
	} else { 
	$post_msg = '<h4 style="color: red;">Please try Again</h4>';	
	header('location:'.URL.'profiles.php?post_msg='.$post_msg);
	}
}
if(isset($_POST) && $_POST['submit'] == 'SaveEdit') {
	$date = date('Y-m-d');
	//print_r($_POST); exit;
	$username = stripslashes($_POST['Username']);
	$name = stripslashes($_POST['Name']);
	$phone = stripslashes($_POST['Phonenumber']);
	$address = stripslashes($_POST['Address']);
	$city = stripslashes($_POST['City']);
	$area = stripslashes($_POST['Area']);
	$useremail = $_POST['Useremail'];
	$guid = $_POST['guid'];
	$status = $_POST['status'];
	$securitykey = uniqid();
	$newpassword = stripslashes($_POST['Userpassword']);
	$encpassword = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($securitykey), $newpassword, MCRYPT_MODE_CBC, md5(md5($securitykey))));
	$sth = $db->exec ("UPDATE `de_register` SET `name`='$name',`city`='$city',`area`='$area',/*`password`='$encpassword',*/`securitykey`='$securitykey',`email`='$useremail', `status`='$status', `date`='$date', `phone`='$phone', `address`='$address' WHERE `guid`=$guid");

	if($sth > 0) {
	$post_msg = '<h4 style="color: green;">Details Successfully Updated</h4>';	
	header('location:'.URL.'profiles.php?post_msg='.$post_msg);
	} else { 
	$post_msg = '<h4 style="color: red;">Please try Again</h4>';	
	header('location:'.URL.'profiles.php?post_msg='.$post_msg);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo TITLE; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="<?php echo URL; ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo URL; ?>assets/css/fonts.css">
<link rel="stylesheet" href="<?php echo URL; ?>assets/font-awesome/css/font-awesome.min.css">

<!-- PAGE LEVEL PLUGINS STYLES -->
<link rel="stylesheet" href="<?php echo URL; ?>assets/css/plugins/footable/footable.min.css">
<!-- REQUIRE FOR SPEECH COMMANDS -->
<link rel="stylesheet" type="text/css" href="<?php echo URL; ?>assets/css/plugins/gritter/jquery.gritter.css" />

<!-- Tc core CSS -->
<link id="qstyle" rel="stylesheet" href="<?php echo URL; ?>assets/css/themes/style.css">

<!-- Add custom CSS here -->

<!-- End custom CSS here -->

<!--[if lt IE 9]>
    <script src="<?php echo URL; ?>assets/js/html5shiv.js"></script>
    <script src="<?php echo URL; ?>assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div id="wrapper">
  <div id="main-container"> 
    <!-- BEGIN TOP NAVIGATION -->
    <?php require "topnavigation.php"; ?>
    <!-- /.navbar-top --> 
    <!-- END TOP NAVIGATION --> 
    
    <!-- BEGIN SIDE NAVIGATION -->
    <?php require "sidenavigation.php"; ?>
    <!-- /.navbar-side --> 
    <!-- END SIDE NAVIGATION --> 
    
    <!-- BEGIN MAIN PAGE CONTENT -->
    <div id="page-wrapper"> 
      <!-- BEGIN PAGE HEADING ROW -->
      <div class="row">
        <div class="col-lg-12"> 
          <!-- BEGIN BREADCRUMB -->
          <div class="breadcrumbs">
            <ul class="breadcrumb">
              <li> <a href="<?php echo URL; ?>home.php">Home</a> </li>
              <li class="active"><a href="<?php echo URL; ?>profiles.php">Delivery Boys Profiles</a></li>
            </ul>
            <div class="b-right hidden-xs">
              <ul>
                <li><a href="#" title=""><i class="fa fa-signal"></i></a></li>
                <li><a href="#" title=""><i class="fa fa-comments"></i></a></li>
                <li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="fa fa-plus"></i><span> Tasks</span></a>
                  <ul class="dropdown-menu dropdown-primary dropdown-menu-right">
                    <li><a href="<?php echo URL; ?>profiles.php?action=addNew">Add New Profile</a></li>
                    <li><a href="<?php echo URL; ?>profiles.php">View  Profiles</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- END BREADCRUMB -->
          
          <div class="page-header title"> 
            <!-- PAGE TITLE ROW -->
            <h1>Admin <span class="sub-title"><a href="profiles.php">Delivery Boys Profiles</a></span></h1>
          </div>
          
          <!-- /#ek-layout-button -->
          <div class="qs-layout-menu">
            <div class="btn btn-gray qs-setting-btn" id="qs-setting-btn"> <i class="fa fa-cog bigger-150 icon-only"></i> </div>
            <div class="qs-setting-box" id="qs-setting-box">
              <div class="hidden-xs hidden-sm"> <span class="bigger-120">Layout Options</span>
                <div class="hr hr-dotted hr-8"></div>
                <label>
                  <input type="checkbox" class="tc" id="fixed-navbar" />
                  <span id="#fixed-navbar" class="labels"> Fixed NavBar</span> </label>
                <label>
                  <input type="checkbox" class="tc" id="fixed-sidebar" />
                  <span id="#fixed-sidebar" class="labels"> Fixed NavBar+SideBar</span> </label>
                <label>
                  <input type="checkbox" class="tc" id="sidebar-toggle" />
                  <span id="#sidebar-toggle" class="labels"> Sidebar Toggle</span> </label>
                <label>
                  <input type="checkbox" class="tc" id="in-container" />
                  <span id="#in-container" class="labels"> Inside<strong>.container</strong></span> </label>
                <div class="space-4"></div>
              </div>
              <span class="bigger-120">Color Options</span>
              <div class="hr hr-dotted hr-8"></div>
              <label>
                <input type="checkbox" class="tc" id="side-bar-color" />
                <span id="#side-bar-color" class="labels"> SideBar (Light)</span> </label>
              <ul>
                <li>
                  <button class="btn" style="background-color:#d15050;" onclick="swapStyle('<?php echo URL; ?>assets/css/themes/style.css')"></button>
                </li>
                <li>
                  <button class="btn" style="background-color:#86618f;" onclick="swapStyle('<?php echo URL; ?>assets/css/themes/style-1.css')"></button>
                </li>
                <li>
                  <button class="btn" style="background-color:#ba5d32;" onclick="swapStyle('<?php echo URL; ?>assets/css/themes/style-2.css')"></button>
                </li>
                <li>
                  <button class="btn" style="background-color:#488075;" onclick="swapStyle('<?php echo URL; ?>assets/css/themes/style-3.css')"></button>
                </li>
                <li>
                  <button class="btn" style="background-color:#4e72c2;" onclick="swapStyle('<?php echo URL; ?>assets/css/themes/style-4.css')"></button>
                </li>
              </ul>
            </div>
          </div>
          <!-- /#ek-layout-button --> 
          
        </div>
        <!-- /.col-lg-12 --> 
      </div>
      <!-- /.row --> 
      <!-- END PAGE HEADING ROW -->
      <?php 	if(isset($_GET['action'])) {
						    $action =  $_GET['action']; 
					 } if($action == 'addNew') { 
					 ?>
       <a href="<?php echo URL; ?>profiles.php" class="btn btn-info btn-xs">Back</a>

      <div class="row">
        <div class="col-lg-6">
          <div class="portlet">
            <div class="portlet-heading dark">
              <div class="portlet-title">
                <h4>ADD NEW Sales Man</h4>
              </div>
              <div class="portlet-widgets"> <a data-toggle="collapse" data-parent="#accordion" href="#f-6"><i class="fa fa-chevron-down"></i></a> </div>
              <div class="clearfix"></div>
            </div>
            <div id="f-6" class="panel-collapse collapse in">
              <div class="portlet-body">
                <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter Name" name="Name" required=""/>
                  </div>
                  <div class="form-group">
                    <label>Phone Number</label>
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                      <input type="text" maxlength="10" class="form-control" placeholder="Enter Phone number" name="Phonenumber" autocomplete="off" required=""/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Email address</label>
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="email" class="form-control" placeholder="Enter email" name="Useremail" autocomplete="off" required=""/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>City</label>
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                      <input class="form-control" placeholder="Enter City" name="City" required=""/> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Area</label>
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                      <input class="form-control" placeholder="Enter Area" name="Area" required=""/> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                      <textarea class="form-control" placeholder="Enter Address" name="Address" required=""></textarea> 
                    </div>
                  </div>
                  <!--<div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" placeholder="Choose Password" name="Userpassword" autocomplete="off" required=""/>
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span> </div>
                  </div> -->

                  <div class="clearfix"></div>
                  <div class="form-actions">
                     <button type="submit" class="btn btn-primary" value="add" name="submit">Submit</button>
                    <button type="reset" class="btn">Reset</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php } else if($action == 'editData') { 
	  $guid = $_GET['guid'];  ?>
     <a href="<?php echo URL; ?>profiles.php" class="btn btn-info btn-xs">Back</a>
      <div class="row">
        <div class="col-lg-6">
          <div class="portlet">
            <div class="portlet-heading dark">
              <div class="portlet-title">
                <h4>Edit User Profile</h4>
              </div>
              <div class="portlet-widgets"> <a data-toggle="collapse" data-parent="#accordion" href="#f-6"><i class="fa fa-chevron-down"></i></a> </div>
              <div class="clearfix"></div>
            </div>
            <div id="f-6" class="panel-collapse collapse in">
              <div class="portlet-body">
                <?php $sth = $db->prepare ("SELECT * FROM `de_register` WHERE `guid` = '$guid'");
			      $sth-> execute();
				  $row = $sth-> fetch();
				  $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($row['securitykey']), base64_decode($row['password']), MCRYPT_MODE_CBC, md5(md5($row['securitykey']))), "\0");

				  ?>
                <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="Name" value="<?php echo $row['name']; ?>"/>
                  </div>
                  <div class="form-group">
                    <label>Phone Number</label>
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                      <input type="text" maxlength="10" class="form-control" placeholder="Enter Phone number" name="Phonenumber" value="<?php echo $row['phone']; ?>"  autocomplete="off" required=""/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Email address</label>
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                      <input type="email" class="form-control" placeholder="Enter email" name="Useremail" value="<?php echo $row['email']; ?>" autocomplete="off"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>City</label>
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                      <input class="form-control" placeholder="Enter City" name="City"  value="<?php echo $row['city']; ?>" required=""/> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Area</label>
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                      <input class="form-control" placeholder="Enter Area" name="Area"  value="<?php echo $row['area']; ?>" required=""/> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <div class="input-group"> <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                      <textarea class="form-control" placeholder="Enter Address" name="Address" required=""><?php echo $row['address']; ?></textarea> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                      <option value="">Select Status</option>
                      <option <?php if($row['status']=='Active') { echo "selected"; } ?>>Active</option>
                      <option <?php if($row['status']=='Pending') { echo "selected"; } ?>>Pending</option>
                      <option <?php if($row['status']=='Block') { echo "selected"; } ?>>Block</option>
                    </select>
                  </div>
                <!--  <div class="form-group">
                    <label>Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control" placeholder="Choose Password" name="Userpassword" value="<?php //echo $decrypted; ?>" autocomplete="off">
                      <span class="input-group-addon"><i class="fa fa-lock"></i></span> </div>
                  </div>-->
                  
                  <div class="form-actions">
                    <input type="hidden" name="guid" value="<?php echo $guid; ?>">
                    <button type="submit" class="btn btn-primary" value="SaveEdit" name="submit">Submit</button>
                    <button type="reset" class="btn">Reset</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }  else if($action == 'deleteData') {
		$guid = $_GET['guid'];
		$sth = $db->query ("DELETE FROM `de_register` WHERE `guid`='$guid'");
		//$sth->execute();
		header('location:'.URL.'profiles.php'); 
	} else { if(!empty($post_msg)) { ?>
     <div class="page-header no-padding-bottom"> <?php echo $post_msg; ?> </div><div class="clearfix"></div>
     <?php  } ?>
     <a href="<?php echo URL; ?>profiles.php?action=addNew" class="btn btn-info btn-xs">Add New Profile</a>
      <div class="row">
        <div class="col-lg-12">
          <?php 
		  $rth = $db->query ("SELECT * FROM `de_register` ORDER BY `guid` DESC");
		  $count = $rth->rowCount();
		  ?>
          <!-- START YOUR CONTENT HERE -->
          <div class="portlet table-responsive"><!-- /Portlet -->
            <div class="portlet-heading dark">
              <div class="portlet-title">
                <h4>Delivery Boys Profiles</h4>
              </div>
              <div class="portlet-widgets"> <a data-toggle="collapse" data-parent="#accordion" href="#basic"><i class="fa fa-chevron-down"></i></a> <span class="divider"></span> <a href="#" class="box-close"><i class="fa fa-times"></i></a> </div>
              <div class="clearfix"></div>
            </div>
            <div id="basic" class="panel-collapse collapse in table-responsive">
              <div class="portlet-body no-padding table-responsive">
                <div class="well white">
                  <table id="SampleDT" class="datatable table table-hover table-striped table-bordered tc-table table-responsive">
                    <thead>
                      <tr>
                        <th data-class="expand" class="center">S.No</th>
                        <th data-class="expand" class="center">Name</th>
                        <th data-class="expand" class="center">Email</th>
                        <th data-class="expand" class="center">Phone</th>
                        <th data-class="expand" class="center">City</th>
                        <th data-class="expand" class="center">Area</th>
                        <th data-class="expand" class="center">Address</th>
                        <!--<th data-class="expand" class="center">Password</th>-->
                        <th data-class="expand" class="center">Status</th>
                        <th data-class="expand" class="center">Edit/ Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php if($count > 0) { 
                       $m = 1;
		               while($row = $rth->fetch()) {
		                  $decryptedpassword = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($row['securitykey']), base64_decode($row['password']), MCRYPT_MODE_CBC, md5(md5($row['securitykey']))), "\0");
 ?>
                      <tr>
                        <td class="center"><?php echo $m; ?></td>
                        <td class="center"><?php echo $row['name']; ?></td>
                        <td class="center"><?php echo $row['email']; ?></td>
                        <td class="center"><?php echo $row['phone']; ?></td>
                        <td class="center"><?php echo $row['city']; ?></td>
                        <td class="center"><?php echo $row['area']; ?></td>
                        <td class="center"><?php echo $row['address']; ?></td>
                        <!--<td class="center"><?php //echo $decryptedpassword ?></td>-->
                        <td class="center"><span class="label <?php if($row['status']=='Active') { echo "label-paid"; } else if($row['status']=='Block'){ echo "label-warning"; } else if($row['status']=='Pending') { echo "label-pending"; } ?> arrowed-in-right arrowed-in"><?php echo $row['status']; ?></span></td>
						                      
						<td class="center"><div class="btn-group btn-group-xs"> <a href="<?php echo URL; ?>profiles.php?action=editData&guid=<?php echo $row[0]; ?>"  class="btn btn-inverse"><i class="fa fa-edit icon-only"></i></a> <a href="<?php echo URL; ?>profiles.php?action=deleteData&guid=<?php echo $row[0]; ?>" class="btn btn-danger" onClick="return delete1();"><i class="fa fa-trash icon-only"></i></a> </div></td>
                      </tr>
                      <?php $m++; } } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- /Portlet --> 
        </div>
      </div>
      <?php } ?>
      <!-- BEGIN FOOTER CONTENT -->
      <?php require "footer.php"; ?>
      </button>
      <!-- END FOOTER CONTENT --> 
      
    </div>
    <!-- /#page-wrapper --> 
    <!-- END MAIN PAGE CONTENT --> 
  </div>
</div>

<!-- core JavaScript --> 
<script src="<?php echo URL; ?>assets/js/jquery.min.js"></script> 
<script src="<?php echo URL; ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo URL; ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script> 
<script src="<?php echo URL; ?>assets/js/plugins/pace/pace.min.js"></script> 

<!-- PAGE LEVEL PLUGINS JS --> 
<script src="<?php echo URL; ?>assets/js/plugins/footable/footable.min.js"></script> 
<script src="<?php echo URL; ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script> 
<script src="<?php echo URL; ?>assets/js/plugins/datatables/datatables.js"></script> 
<script src="<?php echo URL; ?>assets/js/plugins/datatables/datatables.responsive.js"></script> 

<!-- Themes Core Scripts --> 
<script src="<?php echo URL; ?>assets/js/main.js"></script> 

<!-- REQUIRE FOR SPEECH COMMANDS --> 
<script src="<?php echo URL; ?>assets/js/speech-commands.js"></script> 
<script src="<?php echo URL; ?>assets/js/plugins/gritter/jquery.gritter.min.js"></script> 

<!-- initial page level scripts for examples --> 
<script src="<?php echo URL; ?>assets/js/plugins/slimscroll/jquery.slimscroll.init.js"></script> 
<script src="<?php echo URL; ?>assets/js/plugins/footable/footable.init.js"></script> 
<script src="<?php echo URL; ?>assets/js/plugins/datatables/datatables.init.js"></script> 

<script type="text/javascript">
function delete1(){
  if(window.confirm("Confirm delete")){
    return true;
  } else
    return false;
}
</script>
</body>
</html>