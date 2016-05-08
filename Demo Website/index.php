<?php include_once('db.php'); ?>				<!-- Database connection included-->

<head>
	<title>Practical</title>
	<link rel="stylesheet" href="style.css">	<!-- Ext. CSS included-->
</head>

<body>
	<?php include_once('header.php'); ?>		<!-- Header File included-->

	<div id="content">
		<p>
			<?php
				$q = "select * from cms where page_id = 1";
				$res = mysqli_query($cn,$q) or exit(mysqli_error($q));
				$cont = mysqli_fetch_assoc($res);
				echo stripslashes($cont['page_content']);
			?>
		</p>
	</div>
</body>
