<?php

/* Destination Email */
$to = "info@metamodelr.com";

/* Subject */
$subject = "METAMODELR.COM CONTACT FORM ENQUIRY";


if(isset($_POST) !=""){
	$name = $_POST['name'];
	$email = $_POST['email'];
	

	$message = $_POST['message'];
	echo $txt = "
		<table border=0 style='width:600px;'>
		<tr><td style='width:50%'>Name: </td><td style='width:50%'>$name</td></tr>
		<tr><td style='width:50%'>Email: </td><td style='width:50%'>$email</td></tr>
		<tr><td style='width:50%'>Message: </td><td style='width:50%'>$message</td></tr>
		</table>";
		
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From:'.$name. '<noreply@metamodelr.com>' . "\r\n";
		$headers .=  "Reply-To: $email" . "\r\n" .
					'X-Mailer: PHP/' . phpversion();

	if(mail($to,$subject,$txt,$headers)){
		echo "mail sent";
	}else{
		echo "error message";
	}
	
}
?>
