<?php 
	class QueryBuilder{

		protected $pdo;

		public function __construct($pdo){
			$this->pdo = $pdo;
		}


		public function selectAll($table){
			$statement = $pdo->prepare("select * from users");

			$statement->execute();

			$task = $statement->fetchAll(PDO::FETCH_OBJ);
		}

		public function get($value){
			echo "<pre>";
			var_dump($value);
			echo "</pre>";
		}
	}
 ?>