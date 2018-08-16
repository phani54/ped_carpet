<?php ob_start(); error_reporting(0);
  session_start();
  extract($_POST);
  extract($_GET);
  $start = time();
  require "lib/path.php";
  require "lib/Bootstrap.php";
  
  $app = new Bootstrap();
?>