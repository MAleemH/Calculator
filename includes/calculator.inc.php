<?php 

	declare(strict_types = 1);
	include 'classautoloader.inc.php';

	$first_num = $_POST['first_number'];
	$operator = $_POST['operator'];
	$second_num = $_POST['second_number'];

	$calc = new Calculator((int)$first_num, $operator, (int)$second_num);

	try {
		echo $calc->calculate();
	} catch (TypeError $e) {
		echo "Error!: " . $e->getMessage();
	}

 ?>