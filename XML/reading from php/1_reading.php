<?php
	$b = simplexml_load_file('books.xml');
	echo "<pre>";
	print_r($b);

	echo "<hr /> Get specific value only 1ST METHOD<br/>";
	echo $b->book[1]->author;

	echo "<hr /> Get all values 2ND METHOD<br/>";
	foreach($b as $i)
	{
		foreach($i as $j)
		{
			echo $j->getName()." = ".$j."<br />";
		}
	}

	echo "<hr /> Get title only 3RD METHOD<br/>";

	foreach($b as $i)
	{
		echo $i->title."<br />";
	}
?>
