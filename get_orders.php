<?php
	
	// $address =  $_POST["address"];
	/*$contactid =  $_REQUEST["contactid"];
	$key = $_REQUEST["key"];
	$api_key = $_REQUEST["api_key"];*/
	// $pickup_date = $_POST["pickup_date"];
	// $service = $_POST["service"];

	// echo $key;

	$cmd = 'curl -X POST -H "Content-Type: multipart/form-data" -F "contactid=64072" -F "api_key=adurcupsk49f8fwek1" -F "key=fcd5c9d258363f090ef3f05d20ff8e" "http://crm.pickmylaundry.in/api/get_orders.php"';

   	$curl_response = exec($cmd);
   	$output = json_decode($curl_response, true);
   	echo json_encode($output);


?>
