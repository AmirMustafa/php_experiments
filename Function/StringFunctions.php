<?php
echo "<pre>";
     $str = "Seed Infotech";
     echo "length of string is: " . strlen($str) . "<hr>";
     echo "uppercase: " . strtoupper($str) . "<hr>";
     echo "lowercase: " . strtolower($str) . "<hr>";
	 echo "reverse: " . strrev($str) . "<hr>";
	 echo "substring:" . substr($str,5,4) . "<hr>";	 	
	 echo "position of e:" . strpos($str,'e',3) . "<hr>";
	
	 $str = 'Mukund was clever student';
	 
	 echo "string before replace-> " . $str . "<br>"; 
	 
	 $str = str_replace('was','is',$str);	 
	 
	 echo "string after replace-> " . $str."<hr/>"; 


	$a = array('indranil','vanita','kapil','amir');
	$r = implode(" ",$a);
	var_dump($r);

	echo "<hr/>";

	$t = "this is, my new, car";
	$y = explode(".",$t);
	var_dump($y);

	$dt = "30/07/1990";
	$arr = explode("/",$dt);
	echo $new = $arr[1]."-".$arr[0]."-".$arr[2];


?>