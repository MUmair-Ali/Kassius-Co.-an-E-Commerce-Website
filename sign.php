<?php

session_start();

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'kassiusco';

//USING VARIABLE CON TO ACT AS A CATALYST FOR CONNECTION
$con = new mysqli($server, $user, $password, $database);

//CHECKING FOR CONNECTION ACCESS
if($con->connect_error)
{
	echo "Error: ".$con->connect_error;
}

else
{
	$email = $_POST['email'];
  $password = $_POST['password'];

	$sql = "SELECT name FROM `registration` WHERE email = '$email' and password = '$password' ";

	if($con->query($sql))
	{
		$_SESSION["success"] = "Welcome to Kassius Co. ".$email;
		header("Location: index.php");
	}

	else
	{
		$_SESSION["status"] = "Incorrect Credentials, Please Try Again.";
		header("Location: signin.php");
	}
}

?>
