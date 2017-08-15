<?php 


	$database = require "core/bootstrap.php";

	
	
	$routes = new Route;

	//var_dump($routes);


	require "route.php";

	$routes->define($router);

	// require $routes->direct('/about/culture');

	// $router = Route::load('route.php');
	// var_dump($_SERVER);

	$uri = trim($_SERVER["REQUEST_URI"],"/");

	// echo $uri;
	$routes->direct('/about/culture');
?>