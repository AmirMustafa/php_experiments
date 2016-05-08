<?php

$folder_name=$_REQUEST['alb_name'];

if(!file_exists($folder_name)) // if dir not already exists
{
	mkdir($folder_name);       // create directory
}

foreach($_FILES as $i)
	{
		$name=$i['name'];
		$nm = explode(".",$name);
		$type = $i['type'];  //setting proper type of file and							size
		$size = ($i['size']/1024);

		if(($type == 'image/jpeg' || $type == 'image/pjpeg' || $type == 'image/png')&&($size <= 80))
		{
		$src=$i['tmp_name'];
		$dest= "$folder_name/$name";
		
		if(!file_exists($dest))
			{
				move_uploaded_file($src,$dest);
			}
		else
			{
				$dest=$folder_name."/".$nm[0].rand(1,10).".".$nm[1];
										//to add random number in name to rename if same file exists
				move_uploaded_file($src,$dest);
			}

		else
			{
			
				echo "Invalid file cause the type is $type and size is $size";	
			}
		}
	}


$d= scandir($folder_name);

foreach($d as $f)
	{
		if($f !='.'&& $f !='..')
		echo "<img src='$folder_name/$f' height='100px'width='100px'/>&emsp;";
	}

?>