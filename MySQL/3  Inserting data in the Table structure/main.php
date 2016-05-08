<?php
	$eid = $_REQUEST['eid'];					//Retrieving data from form.
	$ename = $_REQUEST['ename'];			//Note we are just entering data to mysql database not viewing, you can											view data entered from phpmyadmin interface.
	$esal = $_REQUEST['esal'];

	$cn = mysqli_connect('localhost','root','admin');    //creating the connection to mysql server.
	if($cn)
	{
		echo "got connected<hr/>";
		$q = "create database if not exists amir";		//for creating database named amir if not exists.
		mysqli_query($cn,$q) or exit(mysqli_error($cn));	//executing above query
		echo "database created<hr/>";

		$cn = mysqli_connect('localhost','root','admin','amir');     //as we have  created database above here we are just selecting the database( i.e. amir)

		$q = "create table if not exists emp
			(
				eid int(10),
				ename varchar(50),
				esal int(10)
			)";							//query for table structure
		mysqli_query($cn,$q) or exit(mysqli_error($cn));	//executing the above query
		echo "table connected<hr/>";

		$q = "insert into emp values($eid,'$ename',$esal)";		//query for inserting the user entered data

		mysqli_query($cn,$q) or exit(mysqli_error($cn));		//executing the above query
		echo "data inserted<hr/>";



	}
	echo "<a href='form.html'>back</a>";			//back to form
											//Note this code is same as main2.php but we assumed database is not created, so we created it first.
?>