<?php
	include_once('connect.php');
	$q1 = "select * from emp where eid = ".$_REQUEST['id'];
	$res1 = mysqli_query($cn,$q1) or exit(mysql_error($cn));
	$arr1 = mysqli_fetch_assoc($res1);

?>
 


<html>
 
 <body>
	<form method="post" action="update.php">
		Employee Id: <input type="text" name="eid" value="<?php echo $arr1['eid'];?> " readonly><br/>
		Employee Name: <input type="text" name="ename" value="<?php echo $arr1['ename'];?>"><br/>
		Employee Salary: <input type="text" name="esal" value="<?php echo $arr1['esal'];?>"><br/>
		Department: <select name="did">
						<option>Select</option>
		<?php $q = "select dept_id,dept_name from dept";
		$res = mysqli_query($cn,$q) or exit(mysql_error($cn));
		
		while($arr = mysqli_fetch_assoc($res))
		{
			?>

			

			<option value="<?php echo $arr['dept_id']; ?>" <?php if($arr['dept_id'] == $arr1['d_id']) {?> selected="selected" <?php } ?>><?php echo $arr['dept_name']; ?></option>

			<?php
		}
		
		?>
		</select><br/><br/>
		<input type="submit" name="submit" value="submit">
	</form>
	
  
 </body>
</html>
