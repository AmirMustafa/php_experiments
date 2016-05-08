<?php
	$a = 5;
	$b = 6;
	$choice = 'div';     /* change value accordingly to view respective switch case eg. $choice = 'sub';*/
	switch($choice)
	{
			case 'add' :
			$c = add($a,$b);
			echo "The ".$choice." is ".$c."<br />";
			break;

			case 'sub' :
			$c = sub($a,$b);
			echo "The ".$choice." is ".$c."<br />";
			break;

			case 'mul' :
			$c = mul($a,$b);
			echo "The ".$choice." is ".$c."<br />";
			break;

			case 'div' :
			$c = sub($a,$b);
			echo "The ".$choice." is ".$c."<br />";
			break;

			default: 
				echo 'Enter correct choice';
	}

	function add($a,$b)
	{
		return($a + $b);
	}

	function sub($a,$b)
	{
		return($a - $b);
	}

	function mul($a,$b)
	{
		return($a * $b);
	}

	function div($a,$b)
	{
		return($a / $b);
	}
?>