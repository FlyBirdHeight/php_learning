<?php 
	$handle = fopen('something.php', 'rb');
	while (feof($handle)!==true) {
		# code...
		echo fgets($handle);
	}

	fclose($handle);
		



 ?>