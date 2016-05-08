<?php
	include_once('connect.php');
	
	$q = "create table if not exists dept
		(
			dept_id int(10) auto_increment,
			dept_name varchar(50) not null,
			dept_loc varchar(50) not null,
			primary key(dept_id),
			unique(dept_name)
		)";
	mysqli_query($cn,$q) or exit(mysql_error($cn));

	$q = "create table if not exists emp
			(
				eid int(10) auto_increment,
				ename varchar(50) not null,
				esal int(10) not null,
				d_id int(10) not null,
				primary key(eid),
				foreign key(d_id) references dept(dept_id)
			)";
	mysqli_query($cn,$q) or exit(mysqli_error($cn));



?>