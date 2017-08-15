<?php 

	require "core/database/Connection.php";

	require "core/database/QueryBuilder.php";

	require "core/Route.php";
	
	$config = require "config.php";
	return new QueryBuilder(
		Connection::make($config['database'])
	);



 ?>