<?php
	setcookie('f1','Amir'); //for setting cookie, it takes 2							parameter--> 1st: name of cookie,							2nd: value/content in cookie

	if(isset($_COOKIE['f1'])) // for retrieving data from								cookie we use $_COOKIE['f1']),								where f1 is the NAME of cookie
	{
		echo "Hello ".$_COOKIE['f1'];
	}

	else
	{
		echo " Hello friend";	// Note for the first time the							echo will always be else's o/p		                    as cookie is being set,                               refresh it twice to get actual							result. isset checks whether							cookie exists or not.
	}
?>