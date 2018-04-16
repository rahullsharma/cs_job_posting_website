<?php  
include("dbAccess.php");
include('employer_topnav.html');
include('session.php');

 $db = new mysqli($hn, $un, $pw, $db);
  if ($db->connect_error) die($db->connect_error);

  $sql = "DELETE FROM employee_account WHERE id=?";
if($stmt = mysqli_prepare($db, $sql)){


    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "i", $id);
    
    // Set parameters


 
    $id = $employerID;



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
  <a href="employer_portal.php">Go Back</a> <br><br>


</body>





</html>