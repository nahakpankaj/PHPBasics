<html>
<head>
	<title>Armstrong</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<form method="POST">
		<label>Enter a Number</label>
		<input type="number" name="no"><br>
		<button type="submit" class="btn btn-info">Submit</button>
	</form>
</body>
</html>


<?php 
if ($_POST) {
	// code...
	$no=$_POST['no'];
	$a=$no;
	$sum = 0;
	while ($a!=0) {
		// code...
		$rem = $a%10;
		$sum = $sum+($rem*$rem*$rem);
		$a = $a/10;
	}
	if ($no == $sum) {
		// code...
		echo "$no is An Armstrong No.";
	}else{
		echo "$no is not An Armstrong No.";
	}
}

