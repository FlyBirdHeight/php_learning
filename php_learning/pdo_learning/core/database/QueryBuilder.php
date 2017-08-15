<?php 
	class QueryBuilder{

		protected $pdo;

		public function __construct($pdo){
			$this->pdo = $pdo;
		}


		public function selectAll($table){
			$statement = $this->pdo->prepare("select * from $table");

			$statement->execute();

			return $statement->fetchAll(PDO::FETCH_OBJ);
		}

		public function get($value){
			echo "<pre>";
			var_dump($value);
			echo "</pre>";
		}
	}
 ?>