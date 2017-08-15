<?php 


	$database = require "bootstrap.php";

	require "route.php";

	$routes = new Route;

	require $route->direct();

?>