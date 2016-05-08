<?php

	echo "<pre>";
	print_r($_FILES);  // $_FILES is the method to retrieve				file type data to php page. Its return type is				multidimensional-associative array

	/* foreach($_FILES as $i)     FIRST WAY TO ITERATE
								DISADVANTAGE: cannot print in sentence like below method.
	{
		foreach($i as $j=>$k)
		{
			echo $j."::".$k."<br />"
		}
	}*/

	foreach($_FILES as $i)      //2ND METHOD	
	{
		echo "The name of the uploaded file is ".$i['name']."<br />";

		echo "The type of the uploaded file is ".$i['type']."<br />";

		echo "The size of the uploaded file is ".($i['size']/1024)." KB<br />"; // 1 KB = 1024 BYTES

		echo "The temp path of the uploaded file is ".$i['tmp_name']."<br />";

		echo "The error of the uploaded file is ".$i['error']."<br />";
	}

	//Till now what ever files we have uploaded is in temporary files.
	//so to make it permanent we follow below method.
	// Now 4 making permanent file we need 3 things file, source and destination which are defined below..

	$name = $_FILES['f1']['name']; // accessing name
	$src = $_FILES['f1']['tmp_name']; //source i.e. temprary										files location.
	$dest = 'upload/1.jpg';		// destination folder here we have created folder named "upload" 

	//$dest = 'upload/'.$name;     same code as above if we									want name same as the									uploaded file name.

	move_uploaded_file($src,$dest);	// to move from source to										destination.



?>