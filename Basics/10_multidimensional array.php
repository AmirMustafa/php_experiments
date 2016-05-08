<?php
	$a = array(array(1,2,3,4),
			   array(10,20,30,40),
			   array('abc','xyz','pqr'));

	echo "<pre>";
	print_r($a);

	echo $a[1][2];

	echo "<br /><hr><br />";

	foreach($a as $i)			/* 1st logic*/
	{
		foreach($i as $j)
		{
			echo $j."&emsp;";
		}
	echo "<br />";
	}

	echo "<br /><hr>";

	for($i=0;$i<count($a);$i++)		/* 2nd logic*/
	{
	{
		for($j=0;$j<count($a[$i]);$j++)
		{
			echo $a[$i][$j]."&emsp;";
		}
	echo "<br />";
	}
	
	
		
?>