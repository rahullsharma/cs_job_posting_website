<?php 
  include('session.php');

 require_once 'dbAccess.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);

$sql = mysqli_query("SELECT employer_name, COUNT(employer_name) AS NumberOfProducts FROM job_listing WHERE employer_name='$login_cname';");
$rows = array();
while($r = mysqli_fetch_assoc($sql)) {
    $rows[] = $r;

}
print json_encode($rows);
?>