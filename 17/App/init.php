<?php

// require 'Admin/User.php';
// require 'Member/User.php';

spl_autoload_register(function($class) {
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/Admin/' . $class . '.php';
});

spl_autoload_register(function($class) {
	$class = explode('\\', $class);
	$class = end($class);
	require_once __DIR__ . '/Member/' . $class . '.php';
});