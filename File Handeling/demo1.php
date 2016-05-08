<?php
	if(file_exists('f1.txt'))  //Checking whether file exists
	{
		echo 'It is found<br/>';
	}
	else 
	{
		echo 'File not found<br/>';
	}

	copy('f1.txt','f2.txt');  //to copy the data from one file								to another
	//rename('f2.txt','f3.txt'); ---> for renaming the											existing file
	//unlink('f3.txt'); ---> to delete a particular file.
							//try the above three one by one.

	$fp = @fopen('f1.txt','r') or exit('unable to open file');
	echo 'The file is opened for reading';// fopen--> for reading the file. 1st parameter is name of file and second is mode. If file dosent exist it will display the second msg. @ is for masking warning msg.

	while(!feof($fp)) // to check the file have reached the end of file
	{
		echo fgetc($fp)."<br />"; //1ST METHOD--> reads the character one string i.e. letter at a time. 
	}

	rewind($fp); // brings the pointer to the the starting position.

	while(!feof($fp))
	{
		echo fgets($fp); // 2ND METHOD to read the file line by line.
	}
	echo "<hr/><br />";
	fseek($fp,3); //for bringing the pointer to the particular position
	echo fread($fp,3); //3RD METHOD to read  particular content of the word or sentence eg. the of then
	rewind($fp);
	echo "<hr />";

	$str = file_get_contents('f1.txt'); //4TH METHOD --> To read the complete sentence at once.
	echo $str;

	fclose($fp); //closing file

	

?>