<?php
	include_once('connect.php');

	$q = "insert into dept(dept_name,dept_loc) value('".$_REQUEST['dname']."','".$_REQUEST['dloc']."')";

	mysqli_query($cn,$q) or exit(mysql_error($cn));
	header('location:index.php');
?>