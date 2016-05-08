<?php

$xml = simplexml_load_file('books.xml'); //for reading and accessing xml file

$title = $_REQUEST['title']; //getting data from users
$author = $_REQUEST['author'];
$price = $_REQUEST['price'];

$ch = $xml->addChild('book'); //for moving the pointer to its child node

$ch->addChild('title',$title);  //for moving the pointer to its child node
$ch->addChild('author',$author);
$ch->addChild('price',$price);

$xml->asXml('books.xml'); // Saving the file in XML after changes.

foreach($xml as $i)   // for reading the  file
	{
		foreach($i as $j)
		{
			echo $j->getName()." = ".$j."<br />"; //getName is function for getting name printed along with values.
		}
	}

	echo "<a href='form.html'>Back</a>";

	/* note hierarchy in XML for appending data to its child
		<books>1st append pointer
			<book> 2nd append pointer
				<title></title>
				<author></author>
				<price></price>
			</book>
		</books>*/
?>