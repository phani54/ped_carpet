<?php ob_start();
session_start();
require "lib/config.php";
if(!empty($_SESSION['Rcm_auth_session_login'])){
	$db->query("UPDATE `register` SET `activity_time`='".date('Y-m-d H:i:s')."' WHERE `user_id`='".$_SESSION['Rcm_auth_session_userid']."'");
    unset($_SESSION['Rcm_auth_session_login']);
    unset($_SESSION['Rcm_auth_session_userid']);   
    header("location:".URL);
} 