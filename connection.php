<?php

$user = 'root';
$database = 'KassiusCo';
$server = 'localhost';
$password = '';

$con = new mysqli($server, $user, $password, $database);

// for different database connection we use pdu els for mysql we use mysqli
if($con->connect_error){

   echo 'error:'.$con->mysql_error;
}
else{

		$email = $_POST['email'];
		$status = 1;

		$sql = "INSERT INTO `subscription`(`email`, `status`) VALUES ('$email', $status)";

    $con->query($sql);
}

?>

<?php include("index.php")?>
