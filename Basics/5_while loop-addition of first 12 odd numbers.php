<?php
	$a = 1;
	$sum = 0;
	while($a<24)
	{
		if($a%2!=0)
		{
			$sum = $sum + $a;
			
		}
	
	$a++;
	
	}
	echo $sum;
?>

<?php
/*
	$number = 1;
	$count = 1;
	$add = 0;
	while($count<=12)						(Logic2)
	{
		if($number%2 != 0)
		{
			$add = $add + $number;
			$count++;
		}
	}
	echo 'the addition is'.$add;
*/
?>

<?php
/*
	$number = 1;
	$count = 1;
	$add = 0;								(Logic3)
	while($count<=12)
	{
		$add = $add +$number;
		$number += 2;
	}
	echo 'the addition is'.$add;
*/
?>