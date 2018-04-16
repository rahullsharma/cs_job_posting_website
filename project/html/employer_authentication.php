<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
ini_set('display_errors', 1);
  require_once 'dbAccess.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);


$user = $_POST['email'];
$pass = $_POST['pw2'];

echo $user;
echo $pass;

$query = "SELECT * FROM user WHERE username = '". mysqli_real_escape_string($user) ."' AND pass = '". mysqli_real_escape_string($pass) ."'" ;
$result = mysqli_query($dbc,$query);
if (mysqli_num_rows($result) == 1) {
//Pass

echo "pass";
} else {
echo "fail";

}

$result = $conn->query($sql);





?>