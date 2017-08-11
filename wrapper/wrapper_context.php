<?php 
	$requestBody = '{"username":"josh"}';

	$context = stream_context_create(
			array(
					'http'=>array(
							'method' => 'POST',
							'header'=>"Content-Type: application/json;charset=utf-8;\r\n"."Content-Length:".mb_strlen($requestBody);
							'content' => $requestBody;
						)
				)
		);//php 流的上下文创建，可以传入大多数文件系统和流函数
	$response = file_get_contents('https://my-api.com/users',false,$context);//对流进行封装

 ?>