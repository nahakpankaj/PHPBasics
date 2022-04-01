<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Palindrome</title>
</head>
<body>
	<form method="post">
		Enter a Number :: <input type="number" name="number">
		<button type="submit" class="btn btn-info">Submit</button>
	</form>
</body>
</html>
<?php
	if ($_POST) {
		// code...
		$number = $_POST['number'];
		$reverse = strrev($number);
		if($number == $reverse){
			echo "The Number $number is Palindrome";
		}else{
			echo "The Number $number is not Palindrome";
		}
	}