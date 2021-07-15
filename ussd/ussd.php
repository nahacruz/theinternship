 <?php
 header("content-type:text/plain");

 $phone_number - $_POST['phoneNumber'];

 $testFromUser - $_POST['text'];

 $sessionID - $_POST['sessionId'];

 $serviceCode - $_POST['serviceCode'];

 $counter = explode("*",$testFromUser);

 if (empty($testFromUser)) {
 	
 	$response = "CON Welcome to the NEMA (u) limited";

 	$response = "\n 1. Register";

 	$response = "\n 2. Add a tree";

 	echo $response;
 }else{
     echo "END we have".$testFromUser;
 }