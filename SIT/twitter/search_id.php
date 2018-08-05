<form action="" method="post">
	<input name="search" type="text">
	<input type="submit" name="submit" value="cari">
</form>

<?php	
	if(isset($_POST['submit'])) {
		// reference
		// https://dev.twitter.com/rest/reference

		ini_set('display_errors', 1);
		require_once('TwitterAPIExchange.php');

		$settings = array(
			'oauth_access_token' => "826419127120048132-VFXwjsVc2wuwvjOBKVozuNqgb9FfYDq",
			'oauth_access_token_secret' => "eWyLxNoqHuAgP3Ms5ldmJ5greY7Ftm8LakuS5kwru9GKm",
			'consumer_key' => "taQakKqLaWMd1SJ753gFnCsVC",
			'consumer_secret' => "qGbzzCcY2IlbIruoZ2reEnJBRdprWYdNvckeGnUFKR3EZCDJKc"
		);

		// end point URL for GET
		$url = 'https://api.twitter.com/1.1/search/tweets.json';

		$key = $_POST['search'];

		// methodnya
		$requestMethod = "GET";
		$twitter = new TwitterAPIExchange($settings);
		
		/*-------------SMILE-------------*/
		// kata kunci (parameter)
		$getfield_sm = "?q=".$key." :)";
		$result_sm = $twitter->setGetfield($getfield_sm)
					 ->buildOauth($url, $requestMethod)
					 ->performRequest();
					 
		$output_sm = json_decode($result_sm);
		
		/*-------------SMILE-------------*/
		$getfield_sa = "?q=".$key." :(";
		$result_sa = $twitter->setGetfield($getfield_sa)
					 ->buildOauth($url, $requestMethod)
					 ->performRequest();
					 
		$output_sa = json_decode($result_sa);
		
		header('Content-Type: application/json'); //untuk membuat tampilan menjadi dalam bentuk json
		print_r($output_sa);
		
		
		/*--------------cetak 100 tweet-------------*/
		// $smile=0;
		// $sad=0;
		// foreach ($output_sm->statuses as $tweet) {
			// echo "<img src='" . $tweet->user->profile_image_url . "' >";
			// echo date('H:i, M d', strtotime($tweet->created_at));
			// echo $tweet->user->name;
			// echo $tweet->user->screen_name;
			// echo $tweet->text;
			// echo "<br><br>";
			// $smile++;
		// }
		// echo "NEGATIVE<br>";
		// foreach ($output_sa->statuses as $tweet) {
			// echo "<img src='" . $tweet->user->profile_image_url . "' >";
			// echo $tweet->user->name;
			// echo $tweet->user->screen_name;
			// echo $tweet->text;
			// echo "<br><br>";
			// $sad++;
		// }
		
		// echo "<br><br><br><br>" . $smile . " " . $sad;

	}
?>