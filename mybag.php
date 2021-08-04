<?php

$user = 'root';
$database = 'kassiusco';
$server = 'localhost';
$password = '';

$con = new mysqli($server, $user, $password, $database);

// for different database connection we use pdu els for mysql we use mysqli
if($con->connect_error){

   echo 'error:'.$con->mysql_error;
}
else{
  
    $id = $_GET['id'];
    $query2 = "INSERT INTO `bag`(`productid`, `quantity`) VALUES ('$id', 1)";
    $con -> query($query2);
}
?>

<?php include("cart.php") ?>
