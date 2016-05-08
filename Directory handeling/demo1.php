<?php
	echo getcwd(); //this tells current working directory(i.e. folder)
	if(!file_exists('amir')) //keyword which tells whether files exists or not. 
	{
		mkdir('amir');  // for creating new directory
	}


	echo "<hr />";
	$d = dir('amir');
	//var_dump($d); --for checking datatype of string.

	while($f = $d->read())  // for reading complete set of the directory 
	{
		echo $f."<br />";
	}

	$d->rewind(); // to start new iteration, it  brings the pointer to the beginning of the directory.

	while($f = $d->read()) //reading 2nd directory
	{
		if($f !='.'&& $f != '..') // as the files  . and .. are two files are bi-default taken by os so ignoring it.
		echo "<img src='amir/$f' height='100px' width='100px' />&emsp;";
	}

	$d->close(); // for closing the directory but it is not mandotary, without writing this code it works as by default directory get closes.

?>