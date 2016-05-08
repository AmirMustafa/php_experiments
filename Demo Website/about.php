<?php include('db.php') ?>

<html>
	<head>
		<title>Practical</title>
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<?php include('header.php');  ?>
		<div id="content">
			<p>
				<?php
					$q = "select * from cms where page_id = 2";
					$res = mysqli_query($cn,$q) or exit(mysqli_error($q));
					$cont = mysqli_fetch_assoc($res);
					echo stripslashes($cont['page_content']);

				?>
			</p>
		</div>
	</body>
</html>