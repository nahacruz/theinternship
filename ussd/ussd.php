 <?php
 header("content-type:text/plane");

 $phone_number - $_POST['phoneNumber'];

 $testFromUser - $_POST['text'];

 $sessionID - $_POST['sessionId'];

 $serviceCode - $_POST['serviceCode'];

 $inputArray = explode("*",$testFromUser);

 switch ($level) {
     
     case 0: 

            $response = "CON Welcome to the NEMA (u) limited";

    $response .= "\n 1. Register";

    $response .= "\n 2. Add a tree";

    echo $response;
        
         break;

     case 1:
             

             break;

      case 2:
                

                 break;       
     
     default:
         
         echo "The option selected is not valid";
         

         break;
 }

 
 // if (empty($testFromUser)) {
 	
 
 
 // }else{
 //     echo "END we have".$testFromUser;
 // }