<?php
session_start();
if(isset($_SESSION['user']))
{
	echo "Hello".$_SESSION['user']."<br/>";
	echo "<a href='logout.php'>Logout</a>";
}
else
{
	header('location:login.php?err=1');
}
?>