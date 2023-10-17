<?php
require("includes/connection.php");

extract($_POST);

if( $firstName != '' && $email != '')
{
	$query = "SELECT * FROM `login` WHERE email = '$email'";
	$result = mysqli_query( $conn, $query);
	$num = mysqli_num_rows($result);

	if( $num > 0)
	{
		header('Location: signup.html?res=exists');
	}
	else
	{
		$code = rand(1111111, 9999999);
		$query = "INSERT INTO `login` (email, role, code, status) VALUES ('$email', 'user', '$code', 'no')";
		mysqli_query( $conn, $query);

		$regDate = date('Y-m-d');
		$query = "INSERT INTO `registration` (firstName, email, regDate)
				VALUES ('$firstName', '$email', '$regDate')";
		mysqli_query( $conn, $query);
		$a = mysqli_affected_rows($conn);
		if( $a > 0)
		{
			$query = "SELECT * FROM `registration` WHERE email = '$email'";
			$result = mysqli_query( $conn, $query);
			while($row = mysqli_fetch_assoc($result))
			{
				$userid = $row['regId'];
			}
			$to = $email;
			
			$subject = "Ironcondor | Verification Email";
			$body = "<h4>Hi, ".ucfirst($firstName)."</h4>
					<p>Your user ID is ".$userid."<br>
					Please click on the link below to verify your Email ID.<br>
					<a href='https://www.primowebsoft.com/projects/alcomist/ironcondor/verify.php?un_cd=".$code."'> Click Here</a>
					</p>";

			$headers = 'From: MetamodelR <noreply@metamodelr.com>' . "\r\n" ;
			$headers .='Reply-To: tarantoaldo@gmail.com'."\r\n" ;
			$headers .='X-Mailer: PHP/' . phpversion();
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";   
			mail($to, $subject, $body,$headers, '-fnoreply@metamodelr.com');

			header('Location: signup.html?res=success');
		}
		else
		{
			header('Location: signup.html?res=error');
		}
	}
}
else
{
	header('Location: signup.html?res=invalid');
}