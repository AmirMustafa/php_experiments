<?php
	include('sessioncheck.php');
	include('../db.php');
?>
<html>
	<head>
		<title>Practical</title>
		<link rel="stylesheet" href="../style.css">

		<script>
			function show(p_id)
			{
				var x = new XMLHttpRequest();
				x.open('get','getc.php?id='+p_id,true);
				x.send();
				x.onreadystatechange = function()
				{
					if((x.readyState == 4) && (x.status == 200))
					{
						document.getElementById('content').innerHTML = x.responseText;
					}
					else
					{
						content.innerHTML = 'Request cannot be completed';
					}
				}

			}
			
		</script>
	</head>

	<body>
		<?php include('header.php'); ?>
		<div style="margin-left: 20px; margin-top:50px">
			<form action="updatec.php" method="post">
				<select onchange="show(this.value)" name="page">
					<option value="">Select</option>
					<?php
						$q =mysqli_query($cn,"select * from cms");
						while($r = mysqli_fetch_assoc($q))
						{
							?>
								<option value="<?php echo $r['page_id']; ?>"><?php echo $r['page_title']; ?></option>
							<?php
						}
					?>
				</select>
				<input style="float:right;" type="submit" name="submit" value="Update"><br/><br/>
				<textarea name="content" rows="25" cols="115" id="content" ></textarea>
			</form>
		</div>
	</body>
</html>