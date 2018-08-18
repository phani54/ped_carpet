<?php ob_start(); error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','redcarpe_sitedb');
define('DB_USER','redcarpe_stuser');
define('DB_PASS','rcmuser$#@!');

$db = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return($db);

