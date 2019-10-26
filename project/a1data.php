<?php

$link = mysqli_connect("localhost", "saketa", "qwerty", "test");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$event=$_POST["x"];
$date1=$_POST["dt"];
$location1=$_POST["loc"];
print_r($_POST);
$sql = "UPDATE clbtb1 SET event1 = '$event',date1 = '$date1', location1 = '$location1' WHERE club_name = 'COSC'";
if(mysqli_query($link, $sql)){
    echo "Records updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
?>
