<?php 

	include 'test01.php';
	$test = new test01();
	foreach ($test->myGenerator() as $key => $value) {//生成器生成数据对系统内存开销小，比数组小多了
		echo $value,PHP_EOL;
	}
 ?>