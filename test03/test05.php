<?php 
	include_once 'test04.php';
	$app = new App();
	$app->addRoute('/users/josh',function(){
		$this->responseContentType = 'application/json;charset=utf8';
		$this->responseBody = '{"name":"Josh"}';
	});
	$app->dispatch('/users/josh');


 ?>