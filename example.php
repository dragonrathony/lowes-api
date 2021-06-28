<html><body><form method="POST">

<table>
	<tr>
		<td>zipCode (optional)</td>
		<td><input name="zipCode" value=""></td>
	</tr>
	<tr>
		<td>itemId</td>
		<td><input name="itemId" value="2000000"></td>
	</tr>
</table>

<button>Submit</button>

<?php

require __DIR__.'/LowesApi.php';

if(isset($_POST['itemId'])){
	$api = new \LowesApi();
	if(!empty($_POST['zipCode']))
		$api->setLocationFromZipCode($_POST['zipCode']);
	$price = $api->fetchProductPrice($_POST['itemId']);
	echo "<br>Price is: ";
	var_dump($price);
}