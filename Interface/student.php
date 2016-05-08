<?php
	include("per_interface.php");

	class student implements per
	{
		private $sub1;
		private $sub2;
		private $sub3;
		//private $total;
		//private $per;

		function __construct($a,$b,$c)
		{
			$this->sub1 = $a;
			$this->sub2 = $b;
			$this->sub3 = $c;
		}

		function total()
		{
			//$this->total = ($this->sub1+$this->sub2+$this->sub3);
			$total = ($this->sub1+$this->sub2+$this->sub3);
			return $total;
		}

		function per()
		{
			//$this->per = $this->total/3;
			$per = $this->total()/3;
			return $per;
		}

		function display()
		{
			echo "The percentage is ".$this->per()." %";
		}
	}

	$s = new student(50,60,80);
	$s->display();
?>