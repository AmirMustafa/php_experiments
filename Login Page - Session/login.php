<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
 <head>
  
 </head>

 <body>
	<form method="post" action="logincheck.php">
		<label>Username</label><input type="text" name="username" <?php if(isset($_COOKIE['user'])) { ?> value="<?php echo $_COOKIE['user']; ?>" <?php } ?>><br/><br/>

		<label>Password</label><input type="text" name="pwd" <?php if(isset($_COOKIE['pwd'])) { ?> value="<?php echo $_COOKIE['pwd']; ?>" <?php } ?>><br/><br/>

		<label>Remember Me</label><input type="checkbox" name="rem" value="123"><br/><br/>

		<label>Login</label><input type="submit" name="submit" value="Login">

		<?php
			if(isset($_REQUEST['err']))
			{
				if($_REQUEST['err'] == 1)
				{
					echo "<i>You are not logged in</i>";
				}
				else if($_REQUEST['err'] == 2)
				{
					echo "<i>Invalid user name or password</i>";
				}

				else if($_REQUEST['err'] == 3)
				{
					echo "<i>You are logged out</i>";
				}
			}
		?>
		
	</form>
  
 </body>
</html>
