<?php
   include('dbAccess.php');
 $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
   session_start();

if (!isset($_SESSION['login_user']) && !isset($_SESSION['admin_user'])){

header("location: employer_login_error.php");
}
   
   $user_check = $_SESSION['login_user'];
   $admin_check = $_SESSION['admin_user'];
$employerID = $_SESSION['employerID'];
   
 $sql = "select username from employee_account where username = '$user_check'";
 $sql2 = "select id from job_listing where employer_name = '$user_check'";
 $sql3= "select company_name from employee_account where username = '$user_check'";
 $sql4 = "select id from employee_account where username = '$user_check'";


$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);

$row = mysqli_fetch_array($result);
$row2 = mysqli_fetch_array($result2);
$row3= mysqli_fetch_array($result3);
   $login_session = $row['username'];
   $login_id = $row2['id'];
    $login_cname = $row3['company_name'];   
 
 
?>