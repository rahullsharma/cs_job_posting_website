<?php
include('admin_top_nav.html');
  include('session.php');

echo "<link rel='stylesheet' type='text/css' href='../css/employer_portal.css' />";


require_once 'dbAccess.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

$sql="SELECT * FROM employee_account where id= $employerID";
}
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);



echo'
<form action="admin_edit_success.php" method="post">
<div id="name_label">ID</div><input type="text" name="id" value="' . $row['id'] . '" readonly > </br>
<div id="name_label">Company Name</div><input type="text" name="company_name" value="' . $row['company_name'] . '"> </br>

 <div id="name_label">Username </div><input type="text" name="username" value="' . $row['username'] . '"> <br>
<div id="name_label">Email</div> <input type="text" name="email" value="' . $row['email'] . '"> <br>


  




<input type="submit" value="Confirm Changes"></form>';


?>