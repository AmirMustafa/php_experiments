<html>
	<head>
	</head>
	
	<body>
		<form method="get">
			Number 1: <input type="text" name="num1" required><br /><br />
			Number 2: <input type="text" name="num2" required><br /><br />
			<input type="submit" name="sub" value="submit">
		</form>
	</body>
</html>

<?php
	if(isset($_REQUEST['sub'])) //only works after clicking submit button
	{
		try //The code having possibility of exception are written here 
		{
			$num1 = $_REQUEST['num1']; //retrieving user data from html
			$num2 = $_REQUEST['num2'];

			if($num2 == 0) // checking exception condition
			{
				throw new ce('The Number 2 should not be zero.'); //used to throw exception code to catch
			}

			else // here non exception codes runs
			{
				$div = $num1/$num2;
				echo "The division of two numbers is $div <br />";
			}
		}

		catch(ce $e) //the catch funcn receives the throw code's error to handle exception
		{
			//echo "In catch";
			echo $e->dis();

		}
	}

	class ce extends Exception // custom exception inherits from exception class(use of inheritance)
	{
		function __construct($a) //ce's constructor
		{
			parent::__construct($a);//accessing parent's constructor of ce's constructor
		}

		function dis()
		{
			echo "The error: <b>".$this->getMessage()."</b><br />";
			echo "In file: <b>".$this->getFile()."</b><br />";
			echo "In Line: <b>".$this->getLine()."</b><br />";
		}
	}
?>