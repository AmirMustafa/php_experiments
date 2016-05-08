<?php
	echo "<pre>";
	$a = array('emp1'=>array(' id'=>1,'name'=>'Amir','Designation'=>'Developer'),
		  'emp2'=>array(' id'=>2,'name'=>'Raj','Designation'=>'Developer'),
		  'emp3'=>array(' id'=>3,'name'=>'Rahul','Designation'=>'Developer'));
	
	foreach($a as $k=>$j)
	{
		echo "The <b>".$k." </b>info is :<br /><br />";
		
		foreach($j as $l=>$m)
		{	
			echo "The <b>".$l." </b> is <b>".$m." </b><br />";
			
		}
		echo "<br />";
		echo "<hr/>";
	}
	
			   
	
	
	
		
?>