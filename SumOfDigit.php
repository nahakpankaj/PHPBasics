<?php

$num = 123;
$sum = 0;
$rem = 0;

for($i = 0; $i<strlen($num);$i++)
{
	$rem = $num%100;
	$sum = $sum+$rem;
	$num = $num/10;
}
echo "Total Sum of given number is ".$sum;