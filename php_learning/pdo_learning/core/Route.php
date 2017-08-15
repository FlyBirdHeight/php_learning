<?php 

	class Route
	{

		protected $routes;

		function define($routes){
			$this->routes = $routes;
		}


		function direct($uri){

			if (array_key_exists($uri,$this->routes)) {
				# code...
				return $this->routes[$uri];

				throw new Exception('No route find for this URI!'); 
			}

		}









	}






 ?>