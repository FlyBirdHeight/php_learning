<?php 
	//php内置服务器 php -S localhost:4000

	//php -S localhost:8000 -c app/config/php.ini php内置服务器使用制定的初始化文件
	//
	//php -S localhost:8000 router.php 路由器脚本的使用，只需在启动php内置的服务器时指定这个php脚本文件的路径
	//
	//
	//php_sapi_name()函数查明使用的是哪个php web服务器
	if(php_sapi_name() === 'cli-server'){
		echo 'php的内置web服务器';
	}else{
		echo '不是php的内置服务器'
	}
 ?>