<?php 
	$closure = function($name){
		return sprintf('Hello %s',$name);
	};
	
	echo $closure("if something can change");
 ?>