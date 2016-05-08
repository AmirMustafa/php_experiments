<?php
	$cn = mysqli_connect('localhost','root','','nasir');    //Selecting the created database

	if($cn)
	{
		$q = "select * from emp";			//query for selecting all
		$rs = mysqli_query($cn,$q) or exit(mysqli_error($cn));

		echo "<table border=1>";
		echo "<th>Employee ID</th><th>Employee Name</th><th>Employee Salary</th>";

	while($arr = mysqli_fetch_object($rs))    //4TH METHOD-->fetch_object method -->returns as simple objects array.											Therefore can be printed by writing object property only and not key-value as											printed below
		{
			echo "<tr>";
			echo "<td>".$arr->eid."</td>";
			echo "<td>".$arr->ename."</td>";
			echo "<td>".$arr->esal."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "not connected";
	}
?>