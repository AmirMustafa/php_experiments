<?php
	include_once('connect.php');

	$q = "insert into emp(ename,esal,d_id) value('".$_REQUEST['ename']."','".$_REQUEST['esal']."','".$_REQUEST['did']."')";

	mysqli_query($cn,$q) or exit(mysql_error($cn));

	header('location:index.php');
?>