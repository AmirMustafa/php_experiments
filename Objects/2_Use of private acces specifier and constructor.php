<?php
class book
{
	private $id;		//private access specifier declared.
	private $name;
	private $author;

	public function book($a,$b,$c) //  function should be									public in order to access									it from outside the class.
	{
		$this->id = $a;   //to access object inside class we						use this pointer
		$this->name = $b;
		$this->author = $c;
	}

	public function getValue()//  function should be									public in order to access it								from outside the class.
	{
		echo $this->id."<br />";    
		echo $this->name."<br />";
		echo $this->author."<br />";//this pointer always							points to the current class.
	}
}

$obj = new book(1,'Harry Potter','J.K. Rolling');												//constructor defined(its										name should be same as										the name of the class.)
$obj->getValue();



?>