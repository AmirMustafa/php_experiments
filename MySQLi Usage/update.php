<?php
	include_once('connect.php');

	  echo $q = "update emp set ename = '".$_REQUEST['ename']."', esal = ".$_REQUEST['esal'].", d_id = ".$_REQUEST['did']." where eid = ".$_REQUEST['eid'];
	  exit;
	

	mysqli_query($cn,$q) or exit(mysqli_error($cn));


	header('location:index.php');
?>