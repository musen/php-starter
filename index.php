<?php

define('BASE_URL', 'http://localhost/php-starter/');

//start up the application
require_once 'bootstrap.php';

if(isset($_REQUEST['page'])) {
	Router::load($_REQUEST['page']);
} else {
	Router::load('home');
}

