<?php
	$cn = mysqli_connect('localhost','root','admin','amir');
	if($cn)
	{
		$q = "select * from emp";
		$rs = mysqli_query($cn,$q) or exit(mysqli_error($cn));  //returned query by mysql is stored in reference															variable from where data will be fetched.
		/*while($arr = mysqli_fetch_array($rs))
		{
			
			echo "The id is ".$arr['eid']."<br/>";				//this ws to print normal (i.e. without tables)															method
			echo "The name is ".$arr['ename']."<br/>";
			echo "The salary is ".$arr['esal']."<br/><hr/>";*/


			echo"<table border=1>";					//note table should be outside while loop and to printed as											heading
			echo "<th>E-ID</th><th>E-NAME</th><th>E-SAL</th>";
			
			while($arr = mysqli_fetch_array($rs))		//code to fetch data from reference variable created above.
														//1ST METHOD-->fetch_array method -->returns numeric as well as associative array. Therefore can be printed by writing numeric index or key-value as printed below
			{
			
			
			echo "<tr>";
			echo "<td>".$arr['eid']."</td>";						
			echo "<td>".$arr['ename']."</td>";
			echo "<td>".$arr['esal']."</td>";
			echo "</tr>";								//printing data in tabular form, using key-value index
			
					
				  
			}
			echo"</table><hr/>";

			
			echo"<table border=1>";					//note table should be outside while loop and to printed as											heading
			echo "<th>E-ID</th><th>E-NAME</th><th>E-SAL</th>";
			
			while($arr = mysqli_fetch_array($rs))		//code to fetch data from reference variable created above.
			{
			
			
			echo "<tr>";
			echo "<td>".$arr[0]."</td>";
			echo "<td>".$arr[1]."</td>";
			echo "<td>".$arr[2]."</td>";
			echo "</tr>";								//printing data in tabular form, using numeric index.
			
					
				  
			}
			echo"</table><hr/>";

			
			
			}
			

	else
	{
		echo "connection error";
	}
?>