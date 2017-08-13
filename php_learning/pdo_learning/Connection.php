<?php 
	class Connection
	{
		public function make(){
			try {
				$pdo = new PDO('mysql:host=127.0.0.1;dbname=books','root','');
			} catch (PDOException $e) {
				die('do not connect database');
			}
		}
	}
?>