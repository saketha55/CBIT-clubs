<?php
$name = $_POST["usrname"];
$password = $_POST["psswd"];
#$email = $_POST["eml"];

/*$conn = $mysqli_connect("localhost","root","","test");

if(!$conn)
{
  echo("error in connecting db");
}*/







function login($username, $password)
{

  $mysqli = new mysqli("localhost:3306", "saketa", "qwerty", "test");

     if (mysqli_connect_errno()) {
       echo("Connect failed: %s\n". mysqli_connect_error());
       exit();
     }

  $username = mysqli_real_escape_string($mysqli,$username);
  $password = mysqli_real_escape_string($mysqli,$password);
  $query = "SELECT * FROM usertbl WHERE UserName='$username'";

 $result = mysqli_query($mysqli,$query)or die(mysqli_error());
 $num_row = mysqli_num_rows($result);

 if( $num_row )
 {
   while( $row=mysqli_fetch_array($result) ){

    if($username == $row['UserName'] && $password == $row['Password'])
    {
      return true;
    }
    else {
      return false;
   }

 }
}
}

if (isset($_POST['submit'])){
    $validLogin = login($name,$password);

    if ($validLogin){
        header("Location: hm2.html");
        echo 'hi there';
     } else {
        echo 'oops  can not do it';
     }

}

?>
