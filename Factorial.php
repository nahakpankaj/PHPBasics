<?php

function factorial($no){
	if ($no<1) {
		// code...
		return 1;
	}else{
		return $no*factorial($no-1);
	}
}
echo "factorial of " .factorial(10);
