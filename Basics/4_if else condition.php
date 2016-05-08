<?php
	$a = 1;
	$b = 2;
	$c = 3;

	if($a>$b)
	{
		if($a>$c)
		{
			echo 'a is greatest';
		}
		else
		{
			echo 'c is greatest';
		}
	}

	else
	{
		if($b>$c)
		{
			echo 'b is greatest';
		}

		else
		{
			echo 'c is greatest';
		}
	}

?>