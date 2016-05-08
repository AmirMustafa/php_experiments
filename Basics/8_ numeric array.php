<?php
	echo "<pre>";
	$a = array(1, 'abc', 4.5, true, 'x');
	//var_dump($a);
	print_r($a);
	$b = 'abcd';
	var_dump($b);
	echo "<br />";

	echo 'The value stored at index 4 is'.$a[4]."<br />";
	echo "The length of array is".sizeof($a)."<br />"; //count($a);

	echo "<hr />Displaying complete array with loop<hr />";
	for($i=0;$i<count($a);$i++)
	{
		echo "The value stored at index".$i." is ".$a[$i]."<br />";
	}
?>