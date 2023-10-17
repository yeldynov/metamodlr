<?php
session_start();
require("includes/connection.php");

$code = $_GET['un_cd'];

$query = "SELECT * FROM `login` WHERE code = '$code'";
$result = mysqli_query( $conn, $query);
$num = mysqli_num_rows($result);

if( $num == 0)
{
	header('Location: signup.html?res=error');
}
else
{
	$row = mysqli_fetch_assoc($result);
	$status = $row['status'];
	$email = $row['email'];
	if( $status == 'yes')
	{
		header('Location: signup.html?res=exists');
	}
	else
	{
		$query1 = "UPDATE `login` SET status = 'yes' WHERE code = '$code'";
		mysqli_query( $conn, $query1);
		$_SESSION['email_user'] = $email;
		header('Location: sign_up.php');
	}
}