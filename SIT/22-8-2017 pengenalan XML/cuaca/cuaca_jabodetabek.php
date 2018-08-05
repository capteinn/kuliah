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
	
	// $channel = $xml->results->channel;
	// $channel->registerXPathNamespace('yweather', 'http://xml.weather.yahoo.com/ns/rss/1.0');

	// $weather_location = $channel->xpath('yweather:location');
	// if(!empty($weather_location)){
	  // foreach($channel->item as $item){
		// $item->registerXPathNamespace('yweather', 'http://xml.weather.yahoo.com/ns/rss/1.0');

		// $forecast = $item->xpath('yweather:forecast');    
		// var_dump($forecast);     
	  // }      
	// }
	$condition = $xml->results->channel.getChild
?>
<h1>Ramalan Cuaca Jabodetabek : <?php echo $xml->Tanggal; ?></h1>
<h3><?php echo  $xml->Isi->Row[0]['date']; ?></h3>
<table>
	<tr>
		<th>Daerah</th>
		<th>Pagi</th>
		<th>Siang</th>
		<th>Malam</th>
	</tr>
	<?php
		foreach ($xml->Isi->Row as $row) {
	?>
	<tr>
		<td><?php echo $row->Daerah; ?></td>
		<td><?php echo $row->Pagi; ?></td>
		<td><?php echo $row->Siang; ?></td>
		<td><?php echo $row->Malam; ?></td>
	</tr>
	<?php 
	} 
	?>
</table>