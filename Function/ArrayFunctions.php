  <?php
    echo '<pre>';
  	$a = array('Cat','Dog','Horse','Tiger','Lion');
  	$new_array = array_chunk($a,2); /* it slice the array from and how much to cut*/
	print_r($new_array);
  ?>
  <hr>
  
  <?php
	$b = array('a','b','c','d');
	$c = array('cat','dog','horse','tiger');
	$new_array = array_combine($b,$c);/*combines where 1st is key  and second is value.*/
	print_r($new_array);
  ?>	
  <hr>

  <?php
	$a = array('a'=>'Cat','b'=>'Dog','c'=>'Horse');
	$b = array('a'=>'Tiger','d'=>'Lion','e'=>'Zebra');
	$new_array = array_merge($a,$b);
	print_r($new_array);
  ?>	
  <hr>
  
  <?php
	$a = array('a'=>'Cat','b'=>'Dog','c'=>'Horse');
	$b = array('b'=>'Lion','d'=>'Elephant','e'=>'Horse');
	$new_array = array_diff($a,$b);/*gives elements of the first array which is not present in the second array it matches only the value*/
	echo 'Different values from first array<br>';
	print_r($new_array);
  ?>
  <hr>
  
  <?php
	$a = array('a'=>'Cat','b'=>'Dog','c'=>'Horse');
	$b = array('a'=>'Cat','d'=>'Dog','c'=>'Horse');
	$new_array = array_diff_assoc($a,$b);/*gives elements of the first array which is not present in the second array it matches only the value and keys*/
	echo 'Different pairs(key+value) from first array<br>';
	print_r($new_array);
  ?>	
  <hr>

  <?php
	$a=array('a'=>'Cat','b'=>'Dog','c'=>'Horse');
	$b=array('d'=>'Cat','b'=>'Tiger','c'=>'Lion');
	$new_array = array_diff_key($a,$b,$c);/*gives elements of the first array which is not present in the second array it matches only the keys*/
	echo 'Different keys from first array<br>';
	print_r($new_array);
  ?>
  <hr>

  <?php
	$a = array('a'=>'Cat','b'=>'Dog','c'=>'Horse');
	$b = array('b'=>'Lion','d'=>'Elephant','e'=>'Horse');
	$new_array = array_intersect($a,$b); /*it returns the common values of the first array. It matches the value only*/
	echo 'Common values from both the arrays<br>';
	print_r($new_array);
  ?>
  <hr>

  <?php
	$a = array('a'=>'Cat','b'=>'Dog','c'=>'Horse');
	$b = array('a'=>'Cat','d'=>'Dog','c'=>'Horse');
	$new_array = array_intersect_assoc($a,$b);/*it returns the common values of the first array. It matches the value and keys*/
	echo 'Common pairs(key+value) from both the array<br>';
	print_r($new_array);
  ?>	
  <hr>

  <?php
	$a=array('a'=>'Cat','b'=>'Dog','c'=>'Horse');
	$b=array('d'=>'Cat','b'=>'Tiger','c'=>'Lion');
	$new_array = array_intersect_key($a,$b,$c);/*it returns the common values of the first array. It matches the key only*/
	echo 'Common keys from both the array<br>';
	print_r($new_array);
  ?>
  <hr>
  
  <?php
	$a = array('Cat','Dog','Horse');
	echo 'last removed element is : ' . array_pop($a);/*it removes elments from end*/
	print_r($a);
  ?>
  <hr>

  <?php
	$a = array('Cat','Dog','Horse');
	array_push($a,'Tiger','Lion');//it will insert these two elements at the end
	print_r($a);
  ?>
  <hr>

  <?php
	$a = array('Cat','Dog','Horse');
	echo 'first removed element is : ' . array_shift($a);//it will remove elements from the begining
	print_r($a);
  ?>
  <hr>

  <?php
	$a = array('Cat','Dog','Horse');
	array_unshift($a,'Tiger','Lion');//it will add elements from the begining
	print_r($a);
  ?>
  <hr>
 
  <?php
	$a = array('Cat','Dog','Horse','Tiger','Lion');
	$slice = array_slice($a,0,2); //it will cut elements in array from and till where.
	print_r($slice);
  ?>	
  <hr>

  <?php
	$a = array('Cat','Horse','Tiger','Lion');
	$b = array('Puma','Leapard','Fox');	
	array_splice($a,1,1,$b); //It will cut element from first array and replace the elements from second array in the cut place of 1st array.
	print_r($a);
  ?>
  <hr>
  
  <?php
	$a = array('a'=>'Dog','b'=>'Tiger','c'=>'Horse');
	sort($a); //it returns ascending order but with numeric index.
	print_r($a);
	echo '<hr>';

	rsort($a);//it returns descending order but with numeric index in ascending order.
	print_r($a);
  ?>	
  <hr>

  <?php
	$a = array('a'=>'Dog','b'=>'Tiger','c'=>'Horse');
	asort($a);//it returns ascending order but with associative index.
	print_r($a);
	echo '<hr>';
	arsort($a); //it returns descending order but with associative index
	print_r($a);
  ?>	
  <hr>

  <?php
	$a = array('d'=>'Dog','a'=>'Tiger','c'=>'Horse');
	ksort($a); //it will sort the keys in ascending order.
	print_r($a);
	echo '<hr>';
	krsort($a);
	print_r($a);
  ?>	 
  <hr>
  
  <?php
	//assigning values to mutiple variables in a single operation
	$my_array = array('Lion','Cat','Horse');
	list($a,$b,$c) = $my_array; //here we can assign values to different variables names.
	echo $a . ' ' . $b . ' ' . $c;
  ?>
  <hr>

  <?php
	//converrting variables to array
	$firstname = 'Kedar';
	$lastname = 'Joshi';
	$age = 25;
	$result = compact('firstname','lastname','age'); 
	print_r($result);
  ?>
  <hr>

  <?php
	$php = array('Mukund','Ajay','Chaitanya');
	if(in_array('Vijay',$php))
		echo 'he is in PHP class';
	else
		echo 'he is not in PHP class'; 
  ?>
  <hr>

  <?php
	$php = array('Mukund','Ajay','Chaitanya');
	$name = 'Sandeep';
	var_dump(is_array($php));
	echo '<br>';
	var_dump(is_array($name));
  ?>
  <hr>

  <?php
	$people = array('name1'=>'Mukund','name2'=>'Ajay','name3'=>'Suyash');
	echo '<br>The value from the current pointer position is:'.current($people);//Mukund
	echo '<br>The key[index] from the current pointer position is:'.key($people);//name1
	echo '<br>'.next($people);//Ajay
	echo '<br>'.reset($people);//Mukund
	echo '<br>'.end($people);//Suyash
	echo '<br>'.prev($people);//Ajay
  ?>