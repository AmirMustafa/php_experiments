<script>
	function ask(a)  //catching parameter passed
	{
		var x =confirm("Do you really want to delete employee id"+a);		//confirm prompt statement
		if(x == true)
		{
			window.location.href = 'delete.php?id='+a; //
		}      // ti pass the page to required page here delete.php  ?id=+a  is written as we want to pass the id to get deleted
	}
</script>

<?php include_once('connect.php'); ?>

	<style>
		.a a
		{
			text-decoration: none; -webkit-appearence:button;
			height:25px;   width:120px;  margin-left:260px;
		}
		#content {   margin-top:20px;   width:100%;   }
		table   { margin:40px auto;  width:60%; }
		table, th{ border: 3px solid gray; border-collapse:collapse; }
	</style>

	
	<div class="a">
		<a href="dept.html">Add Department</a>
		<a href="emp.php">Add Employee</a>

	</div>
	<div id="content">
		<?php
		$q = "select emp.*,dept.* from emp inner join dept on emp.d_id = dept.dept_id";
		
		$res = mysqli_query($cn,$q) or exit(mysqli_error($cn));
		?>
		<table>
		<tr>
			<th>Employee Id</th>
			<th>Employee Name</th>
			<th>Employee Salary</th>
			<th>Department Id</th>
			<th>Department Name</th>
			<th>Department Location</th>
			<th colspan='2'>Operation</th>
		</tr>
		<?php
		while($arr = mysqli_fetch_assoc($res))
		{
			echo "<tr>";
			echo "<th>".$arr['eid']."</th>";
			echo "<th>".$arr['ename']."</th>";
			echo "<th>".$arr['esal']."</th>";
			echo "<th>".$arr['dept_id']."</th>";
			echo "<th>".$arr['dept_name']."</th>";
			echo "<th>".$arr['dept_loc']."</th>";
			echo "<th><a href='edit.php?id=".$arr['eid']."'>Edit</a></th>";
			echo "<th><a onclick='ask(".$arr['eid'].")'>Delete</a></th>";
					// a javascript is taken to show really want to delete msg.
			echo "</tr>";
		}
		?>
		</table>

	</div>
