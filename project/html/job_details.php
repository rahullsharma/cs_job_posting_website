<?php

ini_set('display_errors', 1);
  require_once 'dbAccess.php';
    include 'top_nav.html';

  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
$id = $_POST['id'];
echo "<link rel='stylesheet' type='text/css' href='../css/posting_table.css' />";
echo  "<link href='https://fonts.googleapis.com/css?family=PT Serif' rel='stylesheet'>";

  $sql = "SELECT employer_name, name, salary, category,details,location_city, location_country, date_posted, job_level, job_time,sponsorship,equity from job_listing where id= $id;";
$result = $conn->query($sql);


echo "<table border='1'>
<tr>

<th>Salary</th>
<th>Job Category</th>
<th>City</th>
<th>Country</th>
<th>Job Level</th>
<th>Job Type</th>
<th>Sponsorship</th>
<th>Equity</th>
<th>Posted Date</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<h1>" . $row['name'] . "</h1>";
echo "<h2>" . $row['employer_name'] . "</h2>";
echo "<p>" . $row['details'] . "</p>";

echo "<tr>";
echo "<td>" . $row['salary'] . "</td>";
echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['location_city'] . "</td>";
echo "<td>" . $row['location_country'] . "</td>";
echo "<td>" . $row['job_level'] . "</td>";
echo "<td>" . $row['job_time'] . "</td>";
echo "<td>" . $row['sponsorship'] . "</td>";
echo "<td>" . $row['equity'] . "</td>";
echo "<td>" . $row['date_posted'] . "</td>";


echo "</tr>";
}
echo "</table>";








?>

<html>
<head>

<script src="../js/modal.js"></script>
</head>

<body>
<button class="button" id="button">Apply Now</button>
<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
   <form action="job_submitted.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" name="myForm">
    First Name: <input type="text" name="fn"> <br>
    Last Name: <input type="text" name="ln"><br>
    Email: <input type="text" name="email"><br><br>
    Resume:  <input type="file" name="resume" id="resume"><br>
   Do you require Visa sponsorship?
   <input type="radio" name="yes" value="yes"> Yes
  <input type="radio" name="no" value="no"> No<br>
    <input type="submit" value="Submit Application" name="submit" >
</form>

  </div>

</div>




</body></html>