<head>
<style type="text/css">
          table, th, td
          {
               border: 1px solid black;
          }
</style>
</head>
<?php 
	$file = "cuaca.xml"; 
	$xml = simplexml_load_file($file); 
	$cuaca = new SimpleXMLElement('cuaca.xml', null, true);
	echo "<h2>". $xml->getName() ."</h2>"; 
	foreach($cuaca as $child){
		echo $child;
	}
	?>
<table>
	<tr>
		<th>Daerah</th>
		<th>Pagi</th>
		<th>Siang</th>
		<th>Malam</th>
	</tr>
	<?php
		foreach($cuaca as $isi){
			foreach($isi as $row){
				echo "<tr>
					<td width='200'>{$row->Daerah}</td>
					<td width='200'>{$row->Pagi}</td>
					<td width='130'>{$row->Siang}</td>
					<td width='130'>{$row->Malam}</td>
				</tr>";
			}
		}
	?>
</table>