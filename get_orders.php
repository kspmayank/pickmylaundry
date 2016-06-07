<?php
	
	// $address =  $_POST["address"];
	$contactid =  $_REQUEST["contactid"];
	$key = $_REQUEST["key"];
	$api_key = $_REQUEST["api_key"];
	// $pickup_date = $_POST["pickup_date"];
	// $service = $_POST["service"];

	// echo $key;

	$cmd = 'curl -i -H "Accept: application/json" -H "Content-Type: application/json"  http://crm.pickmylaundry.in/api/get_orders.php?contactid='+$contactid+'&key'+$key+'&api_key'+$api_key;

   	$curl_response = exec($cmd);
   	$output = json_decode($curl_response, true);
   	// echoRespnse(200, $output);


?>