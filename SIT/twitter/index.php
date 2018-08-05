<?php
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

// kata kunci (parameter)
$getfield = '?q=vokasi';

// methodnya
$requestMethod = 'GET';

$twitter = new TwitterAPIExchange($settings);
$result = $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
			 
header('Content-Type: application/json');
$output = json_decode($result);
print_r($output);