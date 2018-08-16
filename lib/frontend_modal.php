<?php ob_start(); error_reporting(0);
require "lib/config.php";
$date = date('Y-m-d');
extract($_POST);
if(isset($_POST) && $_POST['register'] === 'register'){
  $Name = strip_tags($_POST['p_name']);
  $Email = strip_tags($_POST['p_email']);
  $Password = md5(strip_tags($_POST['p_password']));
  $Mobile = strip_tags($_POST['p_mobile']);
  $Gender = strip_tags($_POST['p_gender']);
  $Created_by = strip_tags($_POST['p_created_by']);
  if(!empty($Email) && !empty($Password) && !empty($Mobile)){
    try {
      $chk = $db->query("SELECT * FROM `register` WHERE `email`='$Email'");
      $chk1 = $db->query("SELECT * FROM `register` WHERE `mobile`='$Mobile'");
      if($chk->rowCount() > 0) {
          echo "0101"; exit;
      } else if($chk1->rowCount() > 0) {
          echo "0102"; exit;
      } else {
        $bth = $db->query("SELECT * FROM register");
        $count = $bth->rowCount();
        if($count > 0) {
          $sth = $db->query("SELECT MAX(guid) FROM `register`");
          $row = $sth->fetch();
          $dt=$row[0];
          $qry = $db->query("SELECT reg_id FROM `register` WHERE guid='$dt'");
          $rest = $qry->fetch();
          $d = substr($rest[0], 2);
          $val = sprintf('RC' . '%06d', $d+1);
        } else {
           $val= 'RC010101';
        }
        $user_id = md5(time().$Email);
        $security_key = md5(time().$user_id);
        $sth = $db->query("INSERT INTO `register`(`user_id`, `security_key`, `name`,`password`, `mobile`, `email`, `gender`, `created_by`, `reg_id`, `date`) VALUES ('$user_id', '$security_key', '$Name','$Password', '$Mobile', '$Email', '$Gender', '$Created_by', '$val', '$date')");
        if($sth == true){
          session_start();
		  $_SESSION['Rcm_auth_session_login'] = true;
          $_SESSION['Rcm_auth_session_userid'] = $user_id;
          echo "1111"; exit;
        } else {
           echo "0000"; exit;
        }
      }
    } catch(Exception $e) {
      echo print_r('Error: '.$e); exit;
    }
  } else {
  	 echo "0000"; exit;
  }
}
else if(isset($_POST) && $_POST['userLogin'] === 'Login'){
	$Email = strip_tags($_POST['emailid']);
	$Password = md5(strip_tags($_POST['password']));
	if(!empty($Email) && !empty($Password)){
		try {
			$chk = $db->prepare("SELECT * FROM `register` WHERE `email`= :email AND `password` = :password");
			$chk->execute(array(':email' => $Email, ':password' => $Password));
			if($chk->rowCount() === 1) {
				$urow = $chk->fetch();
				session_start();
				$_SESSION['Rcm_auth_session_login'] = true;
				$_SESSION['Rcm_auth_session_userid'] = $urow['user_id'];
				echo "1111"; exit;
			} else {
				echo '0011'; exit;
			}
		} catch(Exception $e) {
		  echo print_r('Error: '.$e); exit;
		}
	} else {
		echo "0000"; exit;
	}
} else if(isset($_POST) && $_POST['action']=='fetchexp') {
	$cid = stripslashes($_POST['cid']);
	$cth = $db->query ("SELECT `name` FROM `division` WHERE `sid`='$cid'");
	echo '<option value="">Select</option>';
	while($crow = $cth->fetch()) {
	  echo "<option value='".$crow['name']."'>".$crow['name']."</option>";
	} 
	exit;
} 