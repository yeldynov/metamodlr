<?php
/* Here you can change the email that need to be matched*/
$email_valid ="info@credience.com";

if(isset($_POST['email'])){
	$email = $_POST['email'];
	if($email_valid == $email){
		echo "ok";
	}else{
		echo "error";
	}
	
	
}

?>