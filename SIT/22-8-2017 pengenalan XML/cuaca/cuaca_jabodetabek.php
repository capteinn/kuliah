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
?>
<h1>Ramalan Cuaca Jabodetabek : <?php echo $xml->Tanggal; ?></h1>
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