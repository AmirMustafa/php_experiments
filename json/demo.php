<?php
header("Content-Type: application/json; charset=UTF-8");
$con = mysqli_connect('localhost','root','123','json');
$result = array();
if($con)
{
	$query = 'select * from data';
	$res = mysqli_query($con,$query) or exit(mysqli_error($con));
	//$result = json_encode(mysqli_fetch_assoc($res));
	//var_dump($result);
	while($arr = mysqli_fetch_assoc($res))
	{
		array_push($result,$arr);//json_encode($arr,JSON_FORCE_OBJECT);
		
	}
	echo $finl = json_encode($result,JSON_FORCE_OBJECT);
}
else
{
	echo "connection error<br/>";
}



?>
