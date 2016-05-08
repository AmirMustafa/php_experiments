<?php
	if(isset($_REQUEST['abc']))
	{
		echo 'Form Submitted Successfully<hr />';

		$p = '/(^[A-Z]{1,1})+([a-z]{1,10})$/';
		$p1 = '/(^[789]{1,1})+([0-9]{9,9})$/';
		$p2 = '/(^[1-9]{1,1})+([0-9]{0,1})$/';
		$fn = $_REQUEST['fn'];
		$ln = $_REQUEST['ln'];
		$mob = $_REQUEST['mob'];
		$age = $_REQUEST['age'];
		if(empty($fn))
		{
			echo "Please enter the first name";
		}

		else if(!preg_match($p,$fn))
		{
			echo "Please enter the valid first name";
		}

		else if(empty($ln))
		{
			echo "Please enter the last name";
		}

		else if(!preg_match($p,$ln))
		{
			echo "Please enter the valid last name";
		}

		else if(empty($mob))
		{
			echo "Please enter the mobile no";
		}

		else if(!preg_match($p1,$mob))
		{
			echo "Please enter the valid mobile no";
		}

		else if(empty($age))
		{
			echo "Please enter the age";
		}

		else if(!preg_match($p2,$age))
		{
			echo "Please enter the valid age";
		}

		else if(!isset($_REQUEST['gender']))
		{
			echo "Please select gender";
		}

		else if(!isset($_REQUEST['hobby']))
		{
			echo "Please select hobby";
		}
    
		else 
		{
		echo "<pre>";
		print_r($_REQUEST);


		echo "The first name is".$_REQUEST['fn']."<br />";
		echo "The last name is".$_REQUEST['ln']."<br />";
		echo "The mobile no. is".$_REQUEST['mob']."<br />";
		echo "The age is".$_REQUEST['age']."<br />";
		echo "The gender is".$_REQUEST['gender']."<br />";
		echo "The hobby is".implode(",",$_REQUEST['hobby'])."<br />";
		}
	}

	else
	{
		echo 'Please submit the form.';
	}

?>