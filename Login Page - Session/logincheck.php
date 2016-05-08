<?php
	if(isset($_REQUEST['submit']))
    {
		$user = $_REQUEST['username'];
		$pwd = $_REQUEST['pwd'];
		if($user == 'admin@localhost' && $pwd == '123456')//for authenticating username and password
		{
			if(isset($_REQUEST['rem']))
			{
				setcookie('user',$user,time()+60*60*24*365); //for setting cookie expiration 3rd parameter is used, can set according to requirement eg 1day
				setcookie('pwd',$pwd,time()+60*60*24*365);
			}

			session_start(); //starting session --> 
			$_SESSION['user'] = $user;
			echo "Hello".$_SESSION['user']."<br/>";
			echo "<a href='home1.php'>Home</a>";
		}

		else
		{
			header('location:login.php?err=2');
		}
	}
	else
	{
		header('location:login.php?err=1');
	}
?>