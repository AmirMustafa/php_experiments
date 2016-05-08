<?php
	$cn = mysqli_connect('localhost','root','','nasir');    //Selecting the created database

	if($cn)
	{
		$q = "select * from emp";			//query for selecting all
		$rs = mysqli_query($cn,$q) or exit(mysqli_error($cn));

		echo "<table border=1>";
		echo "<th>Employee ID</th><th>Employee Name</th><th>Employee Salary</th>";

	while($arr = mysqli_fetch_row($rs))    //3RD METHOD-->fetch_row method -->returns only numeric array.											Therefore can be printed by writing numeric index only and not key-value as											printed below
		{
			echo "<tr>";
			echo "<td>".$arr[0]."</td>";
			echo "<td>".$arr[1]."</td>";
			echo "<td>".$arr[2]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "not connected";
	}
?>