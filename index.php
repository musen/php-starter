<?php

define('BASE_URL', '//localhost/php-starter/');

//start up the application
require_once 'bootstrap.php';

$path_vars = explode('/', ltrim($_SERVER['REQUEST_URI'], '/'));

if(!empty($path_vars[1])) {
	$base_path = array_shift($path_vars);
	Router::load(implode('/', $path_vars));	
} else {
	Router::load('home');
}

