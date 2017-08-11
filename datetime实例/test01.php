<?php 
	$datetime = new \DateTime('2017-08-04 11:29:00');

	$interval = new dateInterval('P2W');
	$datetime->add($interval);

	echo $datetime->format("Y-m-d H:i:s"),PHP_EOL;

	$dateStart = new \DateTime();

	$dateInterval = date_interval_create_from_date_string('-1 day');

	$datePeriod = new datePeriod($dateStart,$dateInterval,3);

	foreach ($datePeriod as $key => $value) {
		echo $value->format('Y-m-d'),PHP_EOL;
	}

 ?>