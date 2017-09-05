<?php 
$url = "http://10.33.34.31/api/add.php?id=8245&username=Fadli&first_name=MuhammadNur&last_name=Fadli&email=muhammadnurfadlifadli@gmail.com&pass_key=123";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$response = json_decode($response);
?>