<?php ob_start(); error_reporting(0);
require "lib/path.php";
require "lib/config.php";
require "lib/secure.php";
extract($_POST);
if(isset($_POST) && $_POST['action']=='fetchexp') {
   $cid = stripslashes($_POST['cid']);
   $cth = $db->query ("SELECT * FROM `provience` WHERE `sid`='$cid'"); ?>
   <option value="">Select State/Provience</option>
	<?php while($crow = $cth->fetch()) {
      echo "<option value='".$crow[0]."'>".$crow[2]."</option>";
	} exit;
} else if(isset($_POST) && $_POST['action']=='fetchproductexp') {
   $cid = stripslashes($_POST['cid']);
   $cth = $db->query ("SELECT * FROM `psub_category` WHERE `sid`='$cid' AND `sid`!='7'"); ?>

    <option value="">Select Sub Category</option>
	<?php while($crow = $cth->fetch()) {
      echo "<option value='".$crow[0]."'>".$crow[2]."</option>";
	} exit;
}
