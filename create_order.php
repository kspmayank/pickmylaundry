<?php
	
	// $address =  $_REQUEST["address"];
	// $contactid =  $_REQUEST["contactid"];
	// $key = $_REQUEST["key"];
	// $api_key = $_REQUEST["api_key"];
	// $pickup_date = $_PREQUEST["pickup_date"];
	// $service = $_REQUEST["service"];

	// echo $address;

	$cmd = 'curl -X POST -H "Content-Type: multipart/form-data" -F "contactid=64072" -F "api_key=adurcupsk49f8fwek1" -F "key=fcd5c9d258363f090ef3f05d20ff8e" -F "address=test" -F "pickup_date=test" -F "service" "http://crm.pickmylaundry.in/api/create_order.php"';

   	$curl_response = exec($cmd);
   	$output = json_decode($curl_response, true);
   	echo json_encode($output);


?>
