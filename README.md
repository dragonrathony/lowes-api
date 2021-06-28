<?php

require __DIR__.'/LowesApi.php';

$lowesapi = new \LowesApi();

// optionally set location
if(!empty($_POST['zipCode']))
	$lowesapi->setLocationFromZipCode($_POST['zipCode']);

$price = $lowesapi->fetchProductPrice($_POST['itemId']);