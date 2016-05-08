<?php
	$eid = $_REQUEST['eid'];		      //Retrieving data from form.			
	$ename = $_REQUEST['ename'];			//Note we are just entering data to mysql database not viewing, you can											view data entered from phpmyadmin interface.
	$esal = $_REQUEST['esal'];

	$cn = mysqli_connect('localhost','root','admin','amir');  //as we have already created database in 1st demo here we are just selecting the database( here amir)
	if($cn)
	{
		

		

		$q = "create table if not exists emp		
			(
				eid int(10),
				ename varchar(50),
				esal int(10)
			)";										//query for table structure
		mysqli_query($cn,$q) or exit(mysqli_error($cn));		//executing the above query
		echo "table connected<hr/>";

		$q = "insert into emp values($eid,'$ename',$esal)";    //query for inserting the user entered data

		mysqli_query($cn,$q) or exit(mysqli_error($cn));		//executing the above query
		echo "data inserted<hr/>";



	}
	echo "<a href='form.html'>back</a>";				//back to form
?>