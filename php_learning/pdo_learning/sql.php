<?php 

	$bulider = require "bootstrap.php";

	$task = $bulider->selectAll("users");

	$bulider->get($task);

	// function dd($string){
	// 	echo "<pre>";
	// 	var_dump($string);
	// 	echo "</pre>";
	// }
	// try {
	// 	$pdo = new PDO('mysql:host=127.0.0.1;dbname=books','root','');
	// } catch (PDOException $e) {
	// 	die('do not connect database');
	// }
	// $statement = $pdo->prepare("select * from users");

	// $statement->execute();

	// $task = $statement->fetchAll(PDO::FETCH_OBJ);
	// echo '123'.PHP_EOL;
	// // dd($task);
	
	

 ?>