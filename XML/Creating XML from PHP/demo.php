<?php
	$d = new DomDocument(); // creating Object of DomDocument
	$root = $d->createElement('employees'); // creating node1
	$node = $d->createElement('emp');// creating node2

	$eid = $d->createElement('eid'); // creating employee id								as a child of emp
	$val = $d->createTextNode(1); // its takes text data (here								hard coded can be from user)
	$eid->appendChild($val); //for creating relation i.e.								hierarchy (here $val is the								child of $eid)
	$node->appendChild($eid);//for creating relation i.e.								hierarchy here $eid is the								child of $node

	$ename = $d->createElement('ename'); // 2ND SETS of data										same as above entering										name
	$val = $d->createTextNode('Aamir');
	$ename->appendChild($val);
	$node->appendChild($ename);

	$esal = $d->createElement('esal');// 3RD SETS of data										same as above entering										name
	$val = $d->createTextNode(50000);
	$esal->appendChild($val);
	$node->appendChild($esal);

	$root->appendChild($node);//for creating relation i.e.								hierarchy here $node is the								child of $root
	$d->appendChild($root);//for creating relation i.e.								hierarchy here $root is the								child of $d
	$d->Save('emp.xml');  // for saving file in PHP.

	$d = simplexml_load_file('emp.xml'); //to read the data									opening the file
	foreach($d as $i)	// for reading data
	{
		foreach($i as $j)
		{
			echo $j->getName()." = ".$j."<br />"; //getName is function for getting name printed along with values.
		}
	}
?>