<?php
	
	// $address =  $_POST["address"];
	$contactid =  $_REQUEST["contactid"];
	$key = $_REQUEST["key"];
	$api_key = $_REQUEST["api_key"];
	// $pickup_date = $_POST["pickup_date"];
	// $service = $_POST["service"];

	// echo $key;

	$cmd = 'curl -i -H "Accept: application/json" -H "Content-Type: application/json"  "http://crm.pickmylaundry.in/api/get_orders.php?contactid=10202&key=15805b7d1f6aefe789c10c3d0a97&api_key=adurcupsk49f8fwek1"';

   	$curl_response = exec($cmd);
   	$output = json_encode($cmd, true);
   	// echoRespnse(200, $output);


?>