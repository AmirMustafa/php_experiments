<?php
	$name = $_REQUEST['sname']; //fetching data from form
	$sub1 = $_REQUEST['s1'];
	$sub2 = $_REQUEST['s2'];
	$sub3 = $_REQUEST['s3'];
	$total = $sub1 + $sub2 + $sub3;
	$avg = ($total/3);



	$fp = fopen('emp.txt','a+') or exit('unable to open the file');   // text to create - mode - 
	fwrite($fp,"STUDENT NAME : ".$name."\n"); //escape										character should be in									double quotes eg. \n(for									new line)
	fwrite($fp,"SUBJECT 1 : ".$sub1."\n");
	fwrite($fp,"SUBJECT 2 : ".$sub2."\n");
	fwrite($fp,"SUBJECT 3 : ".$sub3."\n");
	fwrite($fp,"TOTAL MARKS : ".$total."\n");
	fwrite($fp,"AVERAGE : ".$avg."<hr/>");
	
	rewind($fp);

	while(!feof($fp))
	echo fgets($fp)."<br />";

	/*while(true)					// 2ND LOGIC
	{
		if(!feof($fp))
		{
			echo fgets($fp)."<br />";
		}
		else
		{
			echo "<hr/>";
			break;
		}
	}*/
	
	fclose($fp); // closing the file
	echo "<br/><a href = 'form.html'>back</a>";

?>