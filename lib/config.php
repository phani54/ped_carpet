<?php
date_default_timezone_set('Asia/Kolkata');
define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','redcarpe_redcarpetmatrimo');
define('DB_USER','root');
define('DB_PASS','');

$db = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
return($db);
