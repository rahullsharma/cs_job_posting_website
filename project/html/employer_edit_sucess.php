<?php  
include("dbAccess.php");
include('employer_topnav.html');

 $db = new mysqli($hn, $un, $pw, $db);
  if ($db->connect_error) die($db->connect_error);

  $sql = "UPDATE job_listing  SET employer_name=?, name=?, salary=?, category=?,details=?,location_city=?, location_country=?, job_level=?, job_type=?,job_time=?,sponsorship=?,equity=? WHERE id=?";
if($stmt = mysqli_prepare($db, $sql)){


    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ssssssssssssi",  $employer_name, $name, $salary, $category, $details,$location_city,$location_country, $job_level,$job_type, $job_time, $sponsorship, $equity,$id);
    
    // Set parameters


   $employer_name = $_REQUEST['employer_name'];
    $name = $_REQUEST['name'];
    $salary = $_REQUEST['salary'];
    $category = $_REQUEST['category'];
        $details = $_REQUEST['details'];
    $location_city = $_REQUEST['location_city'];

    $location_country = $_REQUEST['location_country'];
    $job_level = $_REQUEST['job_level'];
    $job_type = $_REQUEST['job_type'];
    $job_time = $_REQUEST['job_time'];
    $sponsorship = $_REQUEST['sponsorship'];
    $equity = $_REQUEST['equity'];
    $id = $_REQUEST['id'];



    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
      header("location:employer_portal.php");



    
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