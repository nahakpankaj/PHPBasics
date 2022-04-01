<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>prime Program</title>
</head>
<body>
	<form method="post">
		Enter a No = <input type="number" name="number"><br><br>
		<input type="Submit" name="Submit">
	</form>
</body>
</html>
<?php
	if ($_POST) {
		// code...
		$no = $_POST['number'];
		for ($i=2; $i<= $no-1 ; $i++) { 
			// code...
			if ($no%$i==0) {
				// code...
				$value= True;
			}
		}
		if (isset($value)&& $value) {
			// code...
			echo "The Given No ".$no." is not Prime No.";
		}else{
			echo "The Given No ".$no." is Prime No.";
		}
	}