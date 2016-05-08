<?php
	var_dump(checkdate(12,31,2000));
	echo"<hr>";
	var_dump(checkdate(02,29,2003));
	echo"<hr>";
	var_dump(checkdate(13,30,2000));
	echo"<hr>";
	echo(date_default_timezone_get());
	echo "<hr>";
	date_default_timezone_set("Asia/Calcutta");
	echo(date_default_timezone_get());
	echo "<hr>";
	print_r(getdate());
	echo "<hr>";
		
	echo date("a")."<hr>"; //am or pm
	echo date("A")."<hr>"; //AM or PM
	echo date("c")."<hr>"; //complete date
	echo date("d")."<hr>"; //date 
	echo date("D")."<hr>"; //day abbr
	echo date("e")."<hr>"; //timezone
	echo date("F")."<hr>"; //month in words full
	echo date("h")."<hr>"; //hours
	echo date("i")."<hr>"; //min
	echo date("s")."<hr>"; //seconds
	echo date("j")."<hr>"; //date
	echo date("l")."<hr>"; //day in words full
	echo date("m")."<hr>"; //month in numbers
	echo date("M")."<hr>"; //month in words abbr
	echo date("o")."<hr>"; //year
	echo date("O")."<hr>"; //GMT
	echo date("P")."<hr>"; //GMT
	echo date("r")."<hr>"; //complete date
	echo date("S")."<hr>"; //th,rd,st,nd
	echo date("T")."<hr>"; //IST
	echo date("y")."<hr>"; //15
	echo date("Y")."<hr>"; //2015
?>