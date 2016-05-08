<?php

	$eid = $_REQUEST['id'];	// for accessing data from form, inside, within box bracket name of form is used
	$ename = $_REQUEST['name'];
	$ebsal = $_REQUEST['bsal'];
	$edes = $_REQUEST['desig'];

	if($edes == "Select")
	{
		echo "Please select the designation <br />";
		echo "<a href = 'form.html'>back</a>";
	}

	else if($edes == "Developer")
	{
		include('developer.php');
		$d = new developer($eid,$ename,$ebsal,$edes); //developer constructor is called
		//$d->work();
		$d->calsal(); 
		$d->display();

	}

	else if($edes == "Manager")
	{
		include('manager.php');
		$d = new manager($eid,$ename,$ebsal,$edes);//manager constructor is called
		
		$d->calsal();  
		$d->display();

	}
?>