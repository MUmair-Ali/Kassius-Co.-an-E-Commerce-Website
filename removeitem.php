<?php
$user = 'root';
$database = 'kassiusco';
$server = 'localhost';
$password = '';

$con = new mysqli($server, $user, $password, $database);

if($con->connect_error){

   echo 'error:'.$con->mysql_error;
}
else{

    $id = $_GET['id'];
    $query = "DELETE FROM `bag` WHERE productid = '$id'";
    $con -> query($query);
}
?>

<?php include("cart.php") ?>
