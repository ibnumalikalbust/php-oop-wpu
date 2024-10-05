<?php

// require 'Product/ProductInfo.php';
// require 'Product/Product.php';
// require 'Product/Comic.php';
// require 'Product/Game.php';
// require 'Product/PrintProductInfo.php';

spl_autoload_register(function($class) {
	require_once __DIR__ . '/Product/' . $class . '.php';
});