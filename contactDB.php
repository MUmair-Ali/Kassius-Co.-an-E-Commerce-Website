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
    $number = $_POST['number'];
    $feedback = $_POST['feedback'];

		$sql = "INSERT INTO `contactus`(`name`, `email`, `number`, `feedback`) VALUES ('$name','$email','$number','$feedback')";

    $con->query($sql);
}

?>

<?php include("contact.php") ?>
