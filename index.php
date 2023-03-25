<?php
	declare(strict_types = 1);
	include 'includes/classautoloader.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator</title>
</head>
<body>
	<h3>Calculator</h3>
	<form action="includes/calculator.inc.php" method="post">
		<input type="number" name="first_number" placeholder="First Number">
		<select name="operator">
			<option value="add">Add</option>
			<option value="sub">Subtract</option>
			<option value="mul">Multiply</option>
			<option value="div">Divide</option>
		</select>
		<input type="number" name="second_number" placeholder="Second Number">
		<button type="submit" name="calculate">Calculate</button>
	</form>
</body>
</html>