<?php
	
	$address =  $_REQUEST["address"];
	$contactid =  $_REQUEST["contactid"];
	$key = $_REQUEST["key"];
	$api_key = $_REQUEST["api_key"];
	$pickup_date = $_PREQUEST["pickup_date"];
	$service = $_REQUEST["service"];

	// echo $address;

	$cmd = 'curl -i -H "Accept: application/json" -H "Content-Type: application/json"  http://crm.pickmylaundry.in/api/create_order.php?address='.$address.'&contactid='.$contactid.'&pickup_date='.$pickup_date.'&key='.$key.'&api_key='.$api_key.'&service='.$service.;

   	$curl_response = exec($cmd);
   	$output = json_decode($curl_response, true);
   	echoRespnse(200, $output);


?>
