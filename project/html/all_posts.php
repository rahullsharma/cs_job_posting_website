<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 'On');  //On or Off
ini_set('display_errors', 1);
  require_once 'dbAccess.php';
  include 'side_nav.html';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);

echo "<link rel='stylesheet' type='text/css' href='../css/viewAllTable.css' />";
  $sql = "SELECT id, employer_name, name, salary,job_level, category, location_city, job_time,sponsorship, location_country, date_posted from job_listing";




if (isset($_GET['sort'])) {
echo "sort";
    switch ($_GET['sort']) {
        case 'developer':
            $sql .= " WHERE category='Developer' ";
            break;
        case 'it':
            $sql .= "  WHERE category='IT'";
            break;
        case 'qa':
        $sql .= "  WHERE category='QA'";
        break;
  case 'senior':
        $sql .= "  WHERE job_level='Senior'";
        break;
 case 'vp':
        $sql .= "  WHERE job_level='VP'";
        break;
  case 'mid':
        $sql .= "  WHERE job_level='Mid-level'";
        break;
  case 'entry':
        $sql .= "  WHERE job_level='Entry'";
        break;
  case 'internship':
        $sql .= " WHERE job_level='Internship/Co-Op'";
        break;
  case 'ft':
        $sql .= " WHERE job_time='Full-Time'";
        break;
  case 'pt':
        $sql .= " WHERE job_time='Part-Time'";
        break;
  case 'con':
        $sql .= " WHERE job_time='Contract'";
        break;
  case 'visa':
        $sql .= " WHERE sponsorship='Yes'";
        break;
   case 'visa':
        $sql .= " WHERE sponsorship='Yes'";
        break;
  case 'recent':
           $sql .= " ORDER BY UNIX_TIMESTAMP(date_posted) DESC";
break;
  case 'older':
           $sql .= " ORDER BY UNIX_TIMESTAMP(date_posted) ASC";
break;
    }
}

$result = $conn->query($sql);




echo "<table border='1'>
<tr>
<th>Company Name</th>
<th>Position</th>
<th>Salary</th>
<th>Job Category</th>
<th>Job Type</th>
<th>Job Level</th>
<th>City</th>
<th>Country</th>
<th>Posted Date</th>
<th>Details</th>
</tr>";


while($row = mysqli_fetch_array($result))
{
echo "<table id=\"resultsTable\" border=1>";
echo "<tr>";
echo "<td>" . $row['employer_name'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";
echo "<td>" . $row['category'] . "</td>";
echo "<td>" . $row['job_time'] . "</td>";
echo "<td>" . $row['job_level'] . "</td>";

echo "<td>" . $row['location_city'] . "</td>";
echo "<td>" . $row['location_country'] . "</td>";
echo "<td>" . $row['date_posted'] . "</td>";
echo '<td><form name="form" action="job_details.php" method="post">
       

    <input type="hidden" name="id" id="id" value="'.$row["id"].'" >
    <input type="submit" value="View" >
    </form>
    </td>';
echo "</tr>";
}
echo "</table>";



?>