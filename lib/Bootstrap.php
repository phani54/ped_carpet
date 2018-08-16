<?php
class Bootstrap {
	function __construct() {
		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url,'/');
		$url = explode('/',$url);
		if (empty($url[0])) {
				require 'views/home.php';
				return false;
		} else if ($url[0]=='views') {
				require '404.php';
				return false;
		} else {
			if(!empty($url[0]) && empty($url[1]) && $url[0] !== 'action') {
				$file = 'views/' . $url[0] . '.php';
				if(file_exists($file)) {
					require $file;
				} else {
					require '404.php';
					return false;
				}
			} else if($url[0] === 'action' && !empty($url[1]) && empty($url[2])) {
				$file = 'lib/' . $url[1] . '.php';
				if(file_exists($file)) {
					require $file;
				} else {
					require '404.php';
					return false;
				}
			}
		}
   }
}
