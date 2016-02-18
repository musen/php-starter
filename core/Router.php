<?php

/**
* 
*/
class Router
{
	
	function __construct() {
	}

	public static function load($path) {
		if(file_exists('pages' . DIRECTORY_SEPARATOR . $path . '.php')) {
			$title = $path;
			$page = 'pages' . DIRECTORY_SEPARATOR . $path . '.php';			
		} else {
			$page = 'error' . DIRECTORY_SEPARATOR . '404.php';
		}

		include 'layouts/default.php';
	}
}