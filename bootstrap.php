<?php
session_start();

require_once 'config.php';

spl_autoload_register(function($class) {
	require_once 'core/' . $class . '.php';
});

require_once 'functions.php';

