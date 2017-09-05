<?php
	$file = "note.xml"; 
	$xml = simplexml_load_file($file);
	print_r($xml);
?>
<hr>
<?php 
	$file = "note.xml"; 
	$xml = simplexml_load_file($file); 
	echo "<h2>". $xml->getName() ."</h2>"; 
	foreach($xml->children() as $child){
	   echo $child->getName() . ": " . $child . "<br />";
	}
?>