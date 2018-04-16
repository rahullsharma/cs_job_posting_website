<?php
   include('session.php');
include('admin_top_nav.html');
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
ini_set('display_errors', 1);
echo "<link rel='stylesheet' type='text/css' href='../css/employer_portal.css' />";


  require_once 'dbAccess.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
$sql="Select * from employee_account";
$result = $conn->query($sql);

echo "<h1> Admin Portal</h1>";
echo "<h2> Active Employers</h2>";

echo "<table border='1'>
<tr>
<th>Username</th>
<th>Email</th>
<th>Company Name</th>
<th>Date Created</th>

<th>Modify Data</th>

</tr>";

while($row = mysqli_fetch_array($result))
{

$id = $row['id'];

$_SESSION['employerID'] = $id;

echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['company_name'] . "</td>";
echo "<td>" . $row['date_created'] . "</td>";
echo "<td><a href='admin_edit.php?edit=$id'>Edit </a>| <a href='admin_delete.php' class='confirmation'>Delete</a></td>";



echo "</tr>";
}

echo "</table>";





?>
<html>
   
   <head>
      <title>Admin Portal </title>
<script src="../js/delete.js"></script>
   </head>
   
   <body>
      <h2><a href = "admin_add_record.php">Add Employer</a></h2>

      <h2><a href = "admin_logout.php">Sign Out</a></h2>

   </body>
   
</html>