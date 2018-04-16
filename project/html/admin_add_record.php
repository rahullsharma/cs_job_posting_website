<?php
include('admin_top_nav.html');
  include('session.php');

echo "<link rel='stylesheet' type='text/css' href='../css/employer_portal.css' />";

//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 'On');  //On or Off
//ini_set('display_errors', 1);
require_once 'dbAccess.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);




echo'
<title>Add Employer </title
<form action="admin_successful_add.php" method="post">
<div id="name_label">Company Name</div><input type="text" name="company_name"> </br>
<div id="name_label">Email</div> <input type="text" name="email"> <br>
<div id="name_label">Username </div><input type="text" name="username"> <br>
<div id="name_label">Password</div><div id="pass"><input type="password" name="password"> </div></br>



  




<input type="submit" value="Add Employer"></form>';


?>