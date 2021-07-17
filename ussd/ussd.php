 <?php
 header("content-type:text/plane");

 $phone_number - $_POST['phoneNumber'];

 $testFromUser - $_POST['text'];

 $sessionID - $_POST['sessionId'];

 $serviceCode - $_POST['serviceCode'];

 if(empty($testFromUser)){
  
     $testFromUser = "0";

 }else{

     $testFromUser = "0*".$testFromUser;

 }

 $inputArray = explode("*",$testFromUser);

 $level = count($inputArray);

 switch ($level) {
     
     case 1: 

            $response = "CON Welcome to the NEMA (u) limited";

            $response .= "\n 1. Register";

            $response .= "\n 2. Add a tree";

            echo $response;
        
         break;

     case 2:

            echo "CON At Index o = ".$inputArray[0]."\n Index 1 =".$inputArray[1]; 
             

             break;

      case 3:
                

                 break;       
     
     default:
         
         echo "The option selected is not valid";
         

         break;
 }

 
 // if (empty($testFromUser)) {
 	
 
 
 // }else{
 //     echo "END we have".$testFromUser;
 // }