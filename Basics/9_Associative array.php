<?php
	$a = array('sachin'=>55,'dravid'=>45,'yuvraaj'=>40,'kohli'=>75,'raina'=>65);

	echo "<pre>";
	print_r($a);
	echo 'The value scored by Dravid is '.$a['dravid']."<br />";

	echo "<hr>";

	foreach($a as $k=>$i)
	{
		echo "The key is <b>".$k."</b> and its value is <b>".$i."</b><br />";
	}
?>