<?php 
	class App
	{
		protected $routes = array();
		protected $responseStatus = '200 OK';
		protected $responseContentType = 'text/html';
		protected $responseBody = 'Hello world';

		public function addRoute($routePath,$routeCallback){
			$this->routes[$routePath] = $routeCallback->ballTo($this,__CLASS__);
		}

		public function dispatch($currentPath)
		{
			# code...
			foreach ($this->routes as $routePath => $callback) {
				if ($routePath === $currentPath) {
					$callback();
				}
			}

			header('HTTP/1.1'.$this->responseStatus);
			header('Content-type:'.$this->responseContentType);
			header('Content-length:'.mb_strlen($this->responseBody));
			echo $this->responseBody;
		}
	}




 ?>