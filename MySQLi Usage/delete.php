<?php
	include_once('connect.php');

	$q = "delete from emp where eid = ".$_REQUEST['id'];

	mysqli_query($cn,$q) or exit(mysqli_error($cn));
	header('location:index.php');
?>
