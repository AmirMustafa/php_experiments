<?php
include('../db.php');

$user = $_REQUEST['un'];
$pwd = $_REQUEST['pwd'];

$qur = "select * from adminlogin where username = '$user' and pass = '$pwd'";
$r = mysqli_query($cn,$qur) or exit(mysqli_error($cn));

$row = mysqli_num_rows($r);

if($row == 0)
{
	?>
		<script>
			alert('Invalid Username or Password');
			window.location = "index.php";
		</script>
	<?php
}
else
{
	ob_start();						// ob_start: if we have any echo statement before session_start then that echo										is stored in output buffer

	session_start();			    // session_start(); must be written in the beginning of any from login to										logout

	$_SESSION['username'] = $user;	// keeping the retrieved data in session variable
	$_SESSION['login'] = 1;			// 1 indicates that the login is true(i.e. successfull)
	?>
		<script>
			window.location = 'admin_page.php';			// user_page.php is the action page of logincheck.php											      window.location = "#"; is used to redirect in # page in											      javascript
		</script>
	<?php
}

?>