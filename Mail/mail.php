<?php
	$to = $_REQUEST['to'];
	$from = "from: ".$_REQUEST['from'];
	$sub = $_REQUEST['sub'];
	$msg = $_REQUEST['msg'];

	if(mail($to,$from,$sub,$msg))
	{
		echo "mail sent successfully ...";
	}

	else
	{
		echo "Sorry mail not sent!!";
	}
?>