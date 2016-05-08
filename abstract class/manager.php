<?php
	include ('employee.php');//to include parent class
	class manager extends employee//manager class created						 which is child of employee class
	{
		private $no_of_projects = 60;
		private $incentive_per_project = 150;

		function __construct($a,$b,$c,$d)//constructor of										child class
		{
			parent::__construct($a,$b,$c,$d);//way of calling						constructor of parent class
		}

		public function calsal()//calsal 4 manager defined.
		{
			$this->etsal = ($this->ebsal + ($this->no_of_projects * $this->incentive_per_project));
		}
	}
?>