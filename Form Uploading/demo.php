<?php
	$folder_name = $_REQUEST['albname'];

	if(!file_exists($folder_name))
	{
		mkdir($folder_name);
	}

	foreach ($_FILES as $i)
	{
		$name = $i['name'];
		$src = $i['tmp_name'];
		$dest = "$folder_name/$name";
		move_uploaded_file($src,$dest);

	}

	$d = scandir($folder_name);

	foreach($d as $f)
	{
		if($f='.' && $f='..')
		{
			echo "<img src = '$folder_name/$f' height='100px' width='100px' /> &emsp;";
		}
	}

?>