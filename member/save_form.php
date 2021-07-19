 <?php
require('php_mysql.php');
require('../AfricasTalkingGateway.php');

$pName = $_POST['person_name'];

$emailAddress = $_POST['email_address'];

$district = $_POST['district_id'];

$user_password = md5($_POST['user_password']);

$confirm_user_password = md5($_POST['confirm_user_password']);

if($user_password != $confirm_user_password) {

	echo "Passwords did not match";

	exit();
	
}

$mysqli_connection->query("INSERT INTO members(member_name,districts_id,PASSWORD,EMAIL_ADDRESS)VALUES('$pName','$district','$user_password','$emailAddress')");

$message = "Hello ".$pName.", Thank you for creating an account with NEMA Uganda Limited. You will login with your email and your password, Our team leader will contact you shortly for more information" ; 

$gateway    = new AfricasTalkingGateway("sandbox", "7c24837ad19e87b4f6c342f88458c3054d2870f92433e3786755c4c7b3c43125","sandbox"); 

$gateway->sendMessage("+256704984861", $message);

header("Location:list_of_users.php");