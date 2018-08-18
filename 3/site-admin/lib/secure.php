<?php ob_start();
session_start();

$ldate = date("Y-m-d");
$seth = $db->query("SELECT * FROM `login` WHERE `guid`='".$_SESSION['rcm_logInUser']."'");
if($seth->rowCount() == 0) {
	header('location: '.URL.'logout.php');
}
