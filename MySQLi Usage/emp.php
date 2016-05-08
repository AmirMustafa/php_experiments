<?php
	include_once('connect.php');
?>


<html>
 
 <body>
	<form method="post" action="emp_insert.php">
		Employee Name: <input type="text" name="ename"><br/>
		Employee Salary: <input type="text" name="esal"><br/>
		Department: <select name="did">
						<option>Select</option>
		<?php $q = "select dept_id,dept_name from dept";
		$res = mysqli_query($cn,$q) or exit(mysql_error($cn));
		
		while($arr = mysqli_fetch_assoc($res))
		{
			?>

			<option value="<?php echo $arr['dept_id']; ?>"><?php echo $arr['dept_name']; ?></option>

			<?php
		}
		
		?>
		</select><br/><br/>
		<input type="submit" name="submit" value="submit">
	</form>
	
  
 </body>
</html>
