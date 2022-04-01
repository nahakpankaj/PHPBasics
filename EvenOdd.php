<html>
<head>
<title>Program</title>
</head>
<body>
	<form method="post">
		Enter A No:: <input type="number" name="no">
		<br><input type="submit" value="submit">
	</form>
</body>
</html>
<?php
if($_POST){
	$no= $_POST['no'];
	if ($no%2==0) {
		// code...
		echo $no." is Even.";
	}else{
		echo $no. " is Odd.";
	}
}
