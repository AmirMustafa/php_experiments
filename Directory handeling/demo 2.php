<?php
	$d = scandir('amir'); //it returns the associative array
	echo "<pre>";
	print_r($d);

	var_dump(in_array('desert.jpg',$d)); // it returns boolean									true or false. img is not									present therefore false 

	var_dump(in_array('Winter.jpg',$d));// it returns boolean									true or false. img is not									present therefore true

	

	foreach($d as $f) // for accesing and printing all images
	{
		if($f!='.' && $f!='..' )
		echo "<img src='amir/$f' height='100px' width='100px'>";
	}
	//Benefit we can access single file which is present or not...advantage over demo1
?>

