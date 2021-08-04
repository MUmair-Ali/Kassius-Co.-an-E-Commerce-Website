
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

     $image = $_POST['image'];
    $id = $_POST['id'];

		$sql = "UPDATE `products` SET `image`='$image' WHERE id='$id'";

    $con -> query($sql);

}
?>
