<?php
	$cn = @mysqli_connect('localhost','root','admin');  //for the connection of php with mysql. Takes 4 parameter														1st->Name of server 2nd->user name 3rd->password and 4th->														to select database database name is written. since at														present database is not created we are writing first three														parameter. @is for masking warning msg.
	if($cn)   //if connected
	{
		echo "got connected<hr/>";         //just a msg 4 developer in practical case need not to write.
		$q = "create database if not exists amir";		//this code is sent to mysql so we are writing in its														format. if not exists means 
		mysqli_query($cn,$q) or exit(mysqli_error($cn));	// this is for execution of the query to mysql. and the															second case is that if some error occur at my sql															side to display error in php side we write																exit(mysqli_error($cn))
		echo "database created<hr/>";
		$cn = @mysqli_connect('localhost','root','admin','amir'); //connecting with my database(here amir) which we																have just created to enter the table structure 

		$q1 = "create table if not exists emp			
		(
			eid int(10),
			ename varchar(50),
			esal int(10)
		)";														//query for entry of table structure of table emp.														If table exists just enter table structure(eid, ename,														esal) in existing emp. 

		mysqli_query($cn,$q1) or exit(mysqli_error($cn));		//executing above query 
		echo "table created<hr/>";						//msg to display table created.
		mysqli_close($cn);   //closing connection
	}

	else
	{
	
		echo "not conected";				//if not connected properly. i.e. you have written wrong server name or										  username or password.
	}

?>