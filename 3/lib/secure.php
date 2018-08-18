<?php ob_start();
session_start();
$seth = $db->query("SELECT * FROM `register` WHERE `user_id`='".$_SESSION['Rcm_auth_session_userid']."'");
if($seth->rowCount() == 0) {
	header('location: '.URL.'home/');
}
