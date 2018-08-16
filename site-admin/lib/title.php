<?php

$sth = $db->query("SELECT * FROM title");
$row = $sth->fetch();
define('TITLE',$row[1]);
