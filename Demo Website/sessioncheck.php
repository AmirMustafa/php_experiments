<?php
	ob_start();
	session_start();

	if(!isset($_SESSION['login']))
	{
		?>
			<script>
				alert('You are Logged in!');
				window.location = 'login.php';
			</script>
		<?php
	}
?>