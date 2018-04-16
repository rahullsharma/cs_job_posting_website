<?php
  include('session.php');
include('employer_topnav.html');
include('bottom_nav.html');
ini_set('display_errors', 1);
echo "<link rel='stylesheet' type='text/css' href='../css/employer_portal.css' />";


  require_once 'dbAccess.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
    $sql = "SELECT job.id,employer_name, name, salary, category,details,location_city,location_country, date_posted, job_level, job_time,sponsorship,equity FROM job_listing job JOIN employee_account emp ON job.employer_name = emp.company_name WHERE emp.username = '$login_session'";

$result = $conn->query($sql);

echo "<h1> Employer Portal</h1>";
echo "<h2> Active Postings</h2>";

echo "<table border='1'>
<tr>
<th>Name</th>
<th>Salary</th>
<th>Job Category</th>
<th>City</th>
<th>Country</th>
<th>Job Level</th>
<th>Job Type</th>
<th>Sponsorship</th>
<th>Equity</th>
<th>Posted Date</th>
<th>Modify Data</th>

</tr>";

while($row = mysqli_fetch_array($result))
{



echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";
echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['location_city'] . "</td>";
echo "<td>" . $row['location_country'] . "</td>";
echo "<td>" . $row['job_level'] . "</td>";
echo "<td>" . $row['job_time'] . "</td>";
echo "<td>" . $row['sponsorship'] . "</td>";
echo "<td>" . $row['equity'] . "</td>";
echo "<td>" . $row['date_posted'] . "</td>";
echo "<td><a href='employer_edit.php?edit=$row[id]'>Edit </a>| <a href='employer_delete.php' class='confirmation'>Delete</a></td>";



echo "</tr>";
}
echo "</table>";





?>
<html>
   
   <head>
      <title>Employer Portal </title>
<script src="../js/delete.js"></script>
   </head>
   
   <body>
      <h2><a href = "employer_add_record.php">Add Job</a></h2>

      <h2><a href = "employer_logout.php">Sign Out</a></h2>

   </body>
   
</html>