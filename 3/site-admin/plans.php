<?php ob_start(); error_reporting(0);
require "lib/path.php";
require "lib/config.php";
require "lib/title.php";
require "lib/secure.php";
$rdate = date('Y-m-d');
$date = date('d/m/Y');
extract($_GET);
extract($_POST);
if(isset($_POST) && $_POST['submit'] == 'add') {
	stripslashes($_POST);
	extract($_POST);
	try {
			$cth = $db->prepare("SELECT `Id` FROM `plans` WHERE (`name` LIKE '%:name%')");
			$cth->execute(array(':name' => $name));
			if($cth->rowCount() === 0){
					$sth = $db->query("INSERT INTO `plans`( `name`, `price`, `duration`, `profiles`, `views`) VALUES ('$name', '$price', '$duration', '$profiles', '$views')");
					if($sth > 0){
							$post_msg = '<h4 style="color: green;">Member Plan successfully created.</h4>';
						header('location:'.URL.'plans.php?post_msg='.$post_msg);
					} else {
							$post_msg = '<h4 style="color: red;">Member Plan created Unsuccessfully.</h4>';
						header('location:'.URL.'plans.php?post_msg='.$post_msg);
					}
			} else {
					$post_msg = '<h4 style="color: red;">Entered plan already existed.</h4>';
				header('location:'.URL.'plans.php?post_msg='.$post_msg);
			}

	} catch (Exception $e){
			$post_msg = '<h4 style="color: red;">Error while creating plan.</h4>';
		header('location:'.URL.'plans.php?post_msg='.$post_msg);
	}
} else if(isset($_POST) && !empty($_POST['Id']) && $_POST['updatePlanProfile'] === 'updatePlan'){
	stripslashes($_POST);
	extract($_POST);
	try {
			$cth = $db->prepare("SELECT `Id` FROM `plans` WHERE (`name` LIKE '%:name%') AND `Id` != ':id'");
			$cth->execute(array(':name' => $name, ':id' => $Id));
			if($cth->rowCount() === 0){
					$sth = $db->query("UPDATE `plans` SET `name`='$name',`price`='$price', `duration`='$duration', `views`='$views', `profiles`='$profiles' WHERE `Id` = '$Id'");
					if($sth > 0){
							$post_msg = '<h4 style="color: green;">Meber Plan successfully updated.</h4>';
						header('location:'.URL.'plans.php?post_msg='.$post_msg);
					} else {
							$post_msg = '<h4 style="color: red;">Member Plan updated Unsuccessfully.</h4>';
						header('location:'.URL.'plans.php?action=editPlan&Id='.$_POST['Id'].'&post_msg='.$post_msg);
					}
			} else {
					$post_msg = '<h4 style="color: red;">Entered email or username already existed.</h4>';
				header('location:'.URL.'plans.php?action=editPlan&Id='.$_POST['Id'].'&post_msg='.$post_msg);
			}
	} catch (Exception $e){
			$post_msg = '<h4 style="color: red;">Error while updating profile.</h4>';
		header('location:'.URL.'plans.php?action=editPlan&Id='.$_POST['Id'].'&post_msg='.$post_msg);
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
<link rel="shortcut icon" href="<?php echo URL ?>assets/images/favicon.png" type="image/x-icon" /><link rel="stylesheet" href="<?php echo URL; ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo URL; ?>assets/css/fonts.css">
<link rel="stylesheet" href="<?php echo URL; ?>assets/font-awesome/css/font-awesome.min.css">
<!-- PAGE LEVEL PLUGINS STYLES -->
<link rel="stylesheet" href="<?php echo URL; ?>assets/css/plugins/footable/footable.min.css">
<!-- REQUIRE FOR SPEECH COMMANDS -->
<!-- Tc core CSS -->
<link id="qstyle" rel="stylesheet" href="<?php echo URL; ?>assets/css/themes/style.css">
<!-- Add custom CSS here -->
<link rel="stylesheet" href="<?php echo URL; ?>assets/css/plugins/bootstrap-datepicker/datepicker.css">
<!-- End custom CSS here -->
<script src="<?php echo URL; ?>assets/js/jquery.min.js"></script>
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
            <li class="active"><a href="<?php echo URL; ?>plans.php">User Membership plans</a></li>
          </ul>
          <div class="b-right hidden-xs">
            <ul>
              <li class="dropdown"><a href="#" title="" data-toggle="dropdown"><i class="fa fa-plus"></i><span> Tasks</span></a>
                <ul class="dropdown-menu dropdown-primary dropdown-menu-right">
                  <li><a href="<?php echo URL; ?>plans.php?action=addNew">Add New Membership plan</a></li>
                  <li><a href="<?php echo URL; ?>plans.php">View Membership plans</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <!-- END BREADCRUMB -->

        <div class="page-header title">
          <!-- PAGE TITLE ROW -->
          <h1>Admin <span class="sub-title"><a href="plans.php">User Membership plans</a></span></h1>
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
    <?php if(isset($_GET['action'])) {
						    $action =  $_GET['action'];
					 }
		if($action == 'addNew') {
					 ?>
       <a href="<?php echo URL; ?>plans.php" class="btn btn-info btn-xs">Back</a>

      <div class="row">
        <div class="col-lg-6">
          <div class="portlet">
            <div class="portlet-heading dark">
              <div class="portlet-title">
                <h4>ADD NEW Plan</h4>
              </div>
              <div class="portlet-widgets"> <a data-toggle="collapse" data-parent="#accordion" href="#f-6"><i class="fa fa-chevron-down"></i></a> </div>
              <div class="clearfix"></div>
            </div>
            <div id="f-6" class="panel-collapse collapse in">
              <div class="portlet-body">
                <form role="form" id="plan-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off">
									<div class="form-group">
									 	<label> Plan Name </label>
										 <input type="text" name="name" class="form-control required" placeholder="Plan Name"/>
									</div>
									<div class="form-group">
									 <label>Price(Rs.)</label>
										 <input type="text" name="price" class="form-control number required" min="1" maxlength="10" placeholder="Price"/>
									</div>
									<div class="form-group">
									 <label> Duration (Months)</label>
											 <input type="text" name="duration" class="form-control number required" min="1" maxlength="3" placeholder="Duration" />
									</div>
									<div class="form-group">
									 <label> Contact Profiles </label>
										 <input type="text" name="profiles" class="form-control number required" min="1" maxlength="3" placeholder="Contact Profiles" />
									</div>
									<div class="form-group">
									 <label> Views </label>
										 <select class="form-control required" name="views">
												 <option value="">Select</option>
												 <option>Limited</option>
												 <option>Unlimited</option>
										 </select>
									</div>
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
		<?php } else if(isset($_GET['action']) && $_GET['action'] === 'editPlan' && !empty($_GET['Id'])) {
			$Id = stripcslashes($_GET['Id']);
	$sth = $db->prepare ("SELECT * FROM `plans` WHERE `Id` = :Id");
	$sth->execute(array(':Id' => $Id));
			if($sth->rowCount() > 0){
					$row = $sth->fetch();
	?>
<a href="<?php echo URL; ?>plans.php" class="btn btn-info btn-xs">Back</a>

<div class="row">
 <div class="col-lg-6">
	 <div class="portlet">
		 <div class="portlet-heading dark">
			 <div class="portlet-title">
				 <h4> Edit Plan</h4>
			 </div>
			 <div class="portlet-widgets"> <a data-toggle="collapse" data-parent="#accordion" href="#f-6"><i class="fa fa-chevron-down"></i></a> </div>
			 <div class="clearfix"></div>
		 </div>
		 <div id="f-6" class="panel-collapse collapse in">
			 <div class="portlet-body">
				 <form role="form" id="plan-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off">
					 <div class="form-group">
						 <label> Plan Name </label>
							<input type="text" name="name" value="<?php echo $row['name'] ?>"  class="form-control required" placeholder="Plan Name"/>
					 </div>
					 <div class="form-group">
						<label>Price(Rs.)</label>
							<input type="text" name="price" value="<?php echo $row['price'] ?>"  class="form-control number required" min="1" maxlength="10" placeholder="Price"/>
					 </div>
					 <div class="form-group">
						<label> Duration (Months)</label>
								<input type="text" name="duration" value="<?php echo $row['duration'] ?>"  class="form-control number required" min="1" maxlength="3" placeholder="Duration" />
					 </div>
					 <div class="form-group">
						<label> Contact Profiles </label>
							<input type="text" name="profiles" value="<?php echo $row['profiles'] ?>"  class="form-control number required" min="1" maxlength="3" placeholder="Contact Profiles" />
					 </div>
					 <div class="form-group">
						<label> Views </label>
							<select class="form-control required" name="views">
									<option value="">Select</option>
									<option <?php if($row['views'] == 'Limited') echo 'selected'; ?> >Limited</option>
									<option <?php if($row['views'] == 'Unlimited') echo 'selected'; ?> >Unlimited</option>
							</select>
					 </div>
					 <div class="clearfix"></div>
					 <div class="form-actions">
						 <input type="hidden" name="Id" value="<?php echo $row['Id']?>" />
					   <button type="submit" class="btn btn-primary" value="updatePlan" name="updatePlanProfile">Submit</button>
					   <button type="reset" class="btn">Reset</button>
					 </div>
				 </form>
			 </div>
		 </div>
	 </div>
 </div>
</div>
<?php } } else if($action == 'deletePlan') {
		$Id= $_GET['Id'];
		$sth = $db->query ("DELETE FROM `plans` WHERE `Id`='$Id'");
		//$sth->execute();
		header('location:'.URL.'plans.php');
	} else {

		try {
				$sth = $db->query ("SELECT * FROM `plans` ORDER BY `Id` DESC");
				$rows = $sth->fetchAll();

		} catch(Exception $e){
				echo print_r("Exception: ".$e);
		}
		 ?>
	 <a class="btn btn-xs btn-info" href="<?php echo URL; ?>plans.php?action=addNew">Add New</a>

    <div class="row">
      <div class="col-lg-12">
        <?php if(!empty($post_msg)) { ?>
        <div class="page-header no-padding-bottom"> <?php echo $post_msg; ?> </div>
        <?php  }  ?>
        <div class="portlet table-responsive"><!-- /Portlet -->
          <div class="portlet-heading dark">
            <div class="portlet-title">
              <h4>User Membership plans</h4>
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
												<th data-class="expand" class="center">Plan Name</th>
												<th data-class="expand" class="center">Price</th>
												<th data-class="expand" class="center">Duration</th>
												<th data-class="expand" class="center">Views</th>
												<th data-class="expand" class="center">Contact Profiles</th>
												<th data-class="expand" class="center">Actions</th>
											 </tr>
                    </thead>
                    <tbody>
											<?php if(count($rows) > 0){
											$m = 1;
											foreach($rows as $row)  {
											?>
											<tr>
												<td class="center" style="display: none;"><?php echo $m; ?></td>
												<th class="center"> <?php echo $m; ?> </th>
												<td class="center"> <?php echo $row['name']?> </td>
												<td class="center"> Rs. <?php echo $row['price']?>/- </td>
												<td class="center"> <?php echo $row['duration']?> Months</td>
												<td class="center"> <?php echo $row['views']; ?> </td>
												<td class="center"> <?php echo $row['profiles']; ?> </td>
												<td class="center">
													<div class="btn-group">
															<a rel="nofollow" title="Update Plan" href="<?php echo URL ?>plans.php?action=editPlan&Id=<?php echo $row[0] ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
															<a rel="nofollow" title="Delete Plan" href="<?php echo URL ?>plans.php?action=deletePlan&Id=<?php echo $row[0] ?>" class="btn btn-danger btn-sm" onclick="return deleteUser();"><span class="glyphicon glyphicon-trash"></span></a>
													</div>
												</td>
											</tr>

                      <?php $m++; } ?>
                    </tbody>
                  </table>
                     <?php } else{ ?>
                  <tr>
                    <td align="center" colspan="8"><div align="center"><font color="#FF0000">No  Records</font></div></td>
                  </tr>
                  </tbody>
                  </table>
                  <?php } ?>
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

<!-- core JavaScript -->
<script src="<?php echo URL; ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo URL; ?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo URL; ?>assets/js/plugins/pace/pace.min.js"></script>
<script src="<?php echo URL ?>assets/js/jquery.validate.min.js"></script>

<!-- PAGE LEVEL PLUGINS JS -->
<script src="<?php echo URL; ?>assets/js/plugins/fuelux/wizard.min.js"></script>
<script src="<?php echo URL; ?>assets/js/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo URL; ?>assets/js/plugins/footable/footable.min.js"></script>
<script src="<?php echo URL; ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo URL; ?>assets/js/plugins/datatables/datatables.js"></script>
<script src="<?php echo URL; ?>assets/js/plugins/datatables/datatables.responsive.js"></script>

<!-- Themes Core Scripts -->
<script src="<?php echo URL; ?>assets/js/main.js"></script>

<!-- REQUIRE FOR SPEECH COMMANDS -->
<!-- initial page level scripts for examples -->
<script src="<?php echo URL; ?>assets/js/plugins/slimscroll/jquery.slimscroll.init.js"></script>
<script src="<?php echo URL; ?>assets/js/plugins/footable/footable.init.js"></script>
<script src="<?php echo URL; ?>assets/js/plugins/datatables/datatables.init.js"></script>

<script type="text/javascript">
$("#plan-form").validate({
		 errorClass:'err'
	});
	 // Stop user to press enter in textbox
	$("input").keypress(function(event) {
			if (event.keyCode == 13) {
					event.preventDefault();
					return false;
			}
	});
function delete1() {
	if(window.confirm("Confirm delete")) {
	return true;
	} else
    return false;
}
</script>
</body>
</html>
