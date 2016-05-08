<?php
class book
{
	public $id;		//php access specifier is always public,					and never private nor protective.
	public $name;
	public $author;

	public function setValue($a,$b,$c) // We are creating set										and getvalue to access										different input from										different objects.
	{
		$this->id = $a;   //to access object inside class we						use this pointer
		$this->name = $b;
		$this->author = $c;
	}

	public function getValue()// whenever we want to set the							values we pass the parameters							through the function.here we are							showing the values, so no need to							pass any parameters.
	{
		echo $this->id."<br />";    
		echo $this->name."<br />";
		echo $this->author."<br />";//this pointer always							points to the current class.
	}
}

$obj = new book();  //Object1
$obj->setValue(1,'Harry Potter','J.K.Rolling');
$obj->getValue();

$obj1 = new book();  //Object2
$obj1->setValue(2,'Wings of Fire','A.P.J Abdul Kalam');
$obj1->getValue();



?>