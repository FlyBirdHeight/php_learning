<?php 
	$handle = fopen('something.php','rb');
	$str = "";
	while(!feof($handle)){//循环读取，直至读取完整个文件
		$str = $str.fread($handle,1024);
	} 
	// 	
	echo $str;

 ?>