<head>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
	<link rel="stylesheet" href="fontawesome.html" >
</head>
<body>
<div class="container">
	<form method="POST" action="" style="padding-top: 20px;">
		<div class="col-md-3">
			<select class="form-control" name="kota">
				<option></option>
				<option>Yogyakarta</option>
				<option>Medan</option>
				<option>Jakarta</option>
				<option>Surabaya</option>
				<option>Jayapura</option>
			</select>
		</div>
		<div class="col-md-3">
			<input type="submit" value="Pilih" class="btn btn-default" >
		</div>
	</form>
	<br>
	<hr>
	<br>
	<?php
		$jogja = "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20%3D%20%271047065%27&format=xml&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";
		$medan = "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20%3D%20%271047908%27&format=xml&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";
		$jakarta = "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20%3D%20%271047378%27&format=xml&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";
		$surabaya = "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20%3D%20%271044316%27&format=xml&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";
		$jayapura = "https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20%3D%20%271047504%27&format=xml&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys";
		
		if(isset($_POST['kota'])){
			if($_POST['kota'] != '') {
				if ($_POST['kota'] == 'Yogyakarta') {
					$xml = simplexml_load_file($jogja);
				}else if ($_POST['kota'] == 'Medan') {
					$xml = simplexml_load_file($medan);
				}else if ($_POST['kota'] == 'Jakarta') {
					$xml = simplexml_load_file($jakarta);
				}else if ($_POST['kota'] == 'Surabaya') {
					$xml = simplexml_load_file($surabaya);
				}else if ($_POST['kota'] == 'Jayapura') {
					$xml = simplexml_load_file($jayapura);
				}

			$farenheit = $xml->results->channel->item->children('http://xml.weather.yahoo.com/ns/rss/1.0')->condition[0]->attributes()[2];
			$celcius = ($farenheit - 32) * 5/9;
	?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<img style="padding: 5px; margin-top: 5px;" src="<?php echo $xml->results->channel->image->url; ?>" />
			<h2><?php echo $xml->results->channel->item->title; ?></h2>
		</div>
	</div>
	<div class="container">
		<div class="row" >
			<div class="col-md-3">
				<div class="panel panel-default weather-panel">
					<div class="panel-heading">Current weather<br><small id="currentTime" class="supersmall"><?php echo $xml->results->channel->item->pubDate; ?></small></div>
					<div style="padding: 10px;">
					<div class="row">
						<div class="col-sm-6" id="currentIcon"><center><img style="margin-top: 10px; width: 60px; height: 60px;" src="http://l.yimg.com/a/i/us/we/52/<?php echo $xml->results->channel->item->children('http://xml.weather.yahoo.com/ns/rss/1.0')->condition[0]->attributes()[0]; ?>.gif"/></center></div>
						<div class="col-sm-6" style="padding: 0px;">
							<p style="font-size: 70px;"><?php echo $xml->results->channel->item->children('http://xml.weather.yahoo.com/ns/rss/1.0')->condition[0]->attributes()[2]; ?><span>°</span></p>
							<small class="small"><i>Farenheit</i></small>
							<br>
							<h4><?php echo $xml->results->channel->item->children('http://xml.weather.yahoo.com/ns/rss/1.0')->condition[0]->attributes()[3]; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<span>  wind: <?php echo $xml->results->channel->children('http://xml.weather.yahoo.com/ns/rss/1.0')->wind[0]->attributes()[2]; ?> mph(s)</span><br>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default weather-panel">
					<div class="panel-heading">Current weather<br><small id="currentTime" class="supersmall"><?php echo $xml->results->channel->item->pubDate; ?></small></div>
					<div style="padding: 10px;">
					<div class="row">
						<div class="col-sm-6" id="currentIcon"><center><img style="margin-top: 10px; width: 60px; height: 60px;" src="http://l.yimg.com/a/i/us/we/52/<?php echo $xml->results->channel->item->children('http://xml.weather.yahoo.com/ns/rss/1.0')->condition[0]->attributes()[0]; ?>.gif"/></center></div>
						<div class="col-sm-6" style="padding: 0px;">
							<p style="font-size: 70px;"><?php echo intval($celcius); ?><span>°</span></p>
							<small class="small"><i>Celcius</i></small>
							<br>
							<h4><?php echo $xml->results->channel->item->children('http://xml.weather.yahoo.com/ns/rss/1.0')->condition[0]->attributes()[3]; ?></h4>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<span>  wind: <?php echo $xml->results->channel->children('http://xml.weather.yahoo.com/ns/rss/1.0')->wind[0]->attributes()[2]; ?> mph(s)</span><br>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" >
			<div class="col-md-4">
				<div class="panel panel-default weather-panel">
					<div class="panel-heading">Description</div>
					<div style="padding: 10px;">
						<p><?php echo $xml->results->channel->item->description; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
			}
		}
	?>
</div>
</body>

