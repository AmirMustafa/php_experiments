<?php
	include ('employee.php'); //to include parent class 
	class developer extends employee //developer class created						 which is child of employee class
	{
		private $no_of_hours = 60;
		private $incentive_per_hour = 150;

		function __construct($a,$b,$c,$d) //constructor of										child class
		{
			parent::__construct($a,$b,$c,$d); //way of calling						constructor of parent class
		}

		public function calsal() //calsal 4 developer defined.
		{
			$this->etsal = ($this->ebsal + ($this->no_of_hours * $this->incentive_per_hour));
		}
	}
?>