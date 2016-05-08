<?php
	$cn = mysqli_connect('localhost','root','admin','amir');
	if($cn)
	{
		$q = "select * from emp";
		$rs = mysqli_query($cn,$q) or exit(mysqli_error($cn));
// There are 4 ways of fetching data from database:
			//1ST METHOD--> returns objects
			while($arr = mysqli_fetch_object($rs))				
		{
			/*echo "<pre>";
			print_r($arr);*/
			echo "The id is ".$arr->eid."<br/>";
			echo "The name is ".$arr->ename."<br/>";
			echo "The salary is ".$arr->esal."<br/>";
		}

		/*		//2ND METHOD--> returns numeric + assoc array
			while($arr = mysqli_fetch_array($rs))
		{
			echo "<pre>";
			print_r($arr);
			echo "The id is ".$arr['eid']."<br/>";
			echo "The name is ".$arr['ename']."<br/>";
			echo "The salary is ".$arr[esal]."<br/>";
							or
			echo "The id is ".$arr[0]."<br/>";
			echo "The name is ".$arr[1]."<br/>";
			echo "The salary is ".$arr[2]."<br/>";
		}
		*/

		/*		//3RD METHOD-->returns associative array only
		while($arr = mysqli_fetch_assoc($rs))
		{
			echo "<pre>";
			print_r($arr);
			echo "The id is ".$arr[eid]."<br/>";
			echo "The name is ".$arr[ename]."<br/>";
			echo "The salary is ".$arr[esal]."<br/>";
		*/

		/*		//4TH METHOD-->returns numeric array only
			while($arr = mysqli_fetch_row($rs))
		{
			echo "<pre>";
			print_r($arr);
			echo "The id is ".$arr[0]."<br/>";
			echo "The name is ".$arr[1]."<br/>";
			echo "The salary is ".$arr[2]."<br/>";
		}*/





		
	}

	else
	{
		echo "connection error";
	}
?>