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

     $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $number = $_POST['number'];

		$sql = "INSERT INTO `registration`(`name`, `email`, `password`, `address`, `number`) VALUES ('$name','$email','$password','$address','$number')";

    $con->query($sql);
}

?>

<?php include("acc.php") ?>
