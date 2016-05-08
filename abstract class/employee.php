<?php
	abstract class employee  //since one of the method used is						abstract therefore class is abstract
						//PARENT CLASS
	{
		protected $eid;		
		protected $ename;
		protected $ebsal;
		protected $etsal;
		protected $edesig;

		function __construct($a,$b,$c,$d)	//constructor										created
		{
			$this->eid = $a;
			$this->ename = $b;
			$this->ebsal = $c;
			$this->edesig = $d;
		}

		function display()		//for displaying
		{
			echo "The employee designation is : ".$this->edesig."<br />";
			echo "The employee id is : ".$this->eid."<br />";
			echo "The employee name is : ".$this->ename."<br />";
			echo "The employee basic salary is : ".$this->ebsal."<br />";
			echo "The employee total salary is : ".$this->etsal."<br />";
		}
		
		abstract function calsal();		//abstract class									declared which will be									accessed in child									class(here manager and									developer.php)
	}
?>