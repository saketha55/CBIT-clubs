<?php
$name = $_POST["usrname"];
$password = $_POST["psswd"];
#$email = $_POST["eml"];

$conn = $mysqli_connect("localhost","root","","test");

if(!$conn)
{
  echo("error in connecting db");
}
else {
    $result = mysqli_query($conn,"INSERT INTO users(username,password) VALUES($name,$password)");
    echo("Data entered Sucessfully");
}




 ?>
