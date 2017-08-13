<?php 

	require "Connection.php";

	require "QueryBuilder.php";
	
	$config = require "config.php";
	return new QueryBuilder(
		Connection::make($config['database'])
	);



 ?>