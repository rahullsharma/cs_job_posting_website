<?php  
include("dbAccess.php");
include('admin_top_nav.html');

 $db = new mysqli($hn, $un, $pw, $db);
  if ($db->connect_error) die($db->connect_error);

  $sql = "INSERT INTO employee_account (company_name, email,username, password) VALUES (?, ?,?, ?)";

if($stmt = mysqli_prepare($db, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ssss", $company_name,  $email, $username, $password);
    
    // Set parameters
    $company_name = $_POST['company_name'];
    $email = $_POST['email'];

    $username = $_POST['username'];
    $password = $_POST['password'];
 

    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
          header("location:admin_home.php");
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($db);
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($db);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($db);

?>

<html>

<head></head>

<body>
  <a href="employer_add_record.php">Go Back</a> <br><br>


</body>





</html>