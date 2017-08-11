<?php 
	$sql = 'SELECT id FROM users WHERE email= :email';#:email是占位符，为了达到预处理的效果
	$statement = $pdo->prepare($sql);

	$email = filter_input(INPUT_GET,'email');

	$pdo->beginTransaction();


	$statement->bindValue(':email',$email，PDO::PARAM_STR);#处理占位符字符串，并进行替换,第三个参数代表的是告诉这个占位符是什么类型变量bool,null,int,str（默认）
	$statement->execute();

	$results = $statement->fetchAll(PDO::FETCH_ASSOC);
	foreach ($results as $key => $result) {
		# code...
		echo $result['email'];
	}


	$pdo->commit();
 ?>