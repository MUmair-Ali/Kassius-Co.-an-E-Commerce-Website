<?php

$user = 'root';
$database = 'KassiusCo';
$server = 'localhost';
$password = '';

$con = new mysqli($server, $user, $password, $database) or die("database error:". mysqli_error($con));

if(isset($_POST["search"]))
{
  $str = $_POST["searchbar"];
  $query = "SELECT `id` FROM `products` WHERE name = '$str'";
  $result = mysqli_query($con, $query);

  while($row = $result -> fetch_assoc())
  {
    if($row['id'])
    {
      header("Location: details.php?id=".$row['id']);
    }
    else {
      header("Location: index.php");
    }

  }
}

?>
