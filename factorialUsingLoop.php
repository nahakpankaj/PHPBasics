<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>factorial</title>
</head>
<body>
	<form method="post">
		Enter a number :: <input type="number" name="number"><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>
<?php
	if($_POST){
		$fact = 1;
		$number = $_POST['number'];
		echo "factorial of $number is :: ";
		for ($i=1; $i <=$number ; $i++) { 
			// code...
			$fact = $fact*$i;
		}
		echo $fact ."<br>";
	}