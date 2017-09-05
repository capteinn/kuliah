<?php 
$url = "http://10.33.34.31/api/retrieve.php?id=8245&pass_key=123";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
$response = json_decode($response);


?>
<table border="20" width="50%">
	<tr>
		<td>Status</td>
		<td><?php echo $response->status; ?></td>
	</tr>
	<tr>
		<td>Message</td>
		<td><?php echo $response->message; ?></td>
	</tr>
	<tr>
		<td>ID</td>
		<td><?php echo $response->data->id; ?></td>
	</tr>
	<tr>
		<td>Username</td>
		<td><?php echo $response->data->username; ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo $response->data->email; ?></td>
	</tr>
	<tr>
		<td>Pass key</td>
		<td><?php echo $response->data->pass_key; ?></td>
	</tr>
</table>