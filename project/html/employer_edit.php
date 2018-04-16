<?php
include('employer_topnav.html');
  include('session.php');

echo "<link rel='stylesheet' type='text/css' href='../css/employer_portal.css' />";


require_once 'dbAccess.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die($conn->connect_error);
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql = "SELECT job.id,employer_name, name, salary, category,details,location_city,location_country, date_posted, job_level, job_time,sponsorship,equity FROM job_listing job JOIN employee_account emp ON job.employer_name = emp.company_name WHERE emp.username = '$login_session'";
}
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
$dev_check = $row['category'] == 'Developer' ? 'checked' : '';
$IT_check = $row['category'] == 'IT' ? 'checked' : '';
$QA_check = $row['category'] == 'QA' ? 'checked' : '';

$VP_check = $row['job_level'] == 'VP' ? 'checked' : '';
$Senior_check = $row['job_level'] == 'Senior' ? 'checked' : '';
$Mid_check = $row['job_level'] == 'Mid-level' ? 'checked' : '';
$entry_check = $row['job_level'] == 'Entry' ? 'checked' : '';
$Intern_check = $row['job_level'] == 'Internship/Co-Op"' ? 'checked' : '';

$fulltime_check = $row['job_time'] == 'Full-Time' ? 'checked' : '';
$parttime_check = $row['job_time'] == 'Part-Time' ? 'checked' : '';
$contract_check = $row['job_time'] == 'Contract' ? 'checked' : '';


$sponsorYes_check = $row['sponsorship'] == 'Yes' ? 'checked' : '';
$sponsorNo_check = $row['sponsorship'] == 'No' ? 'checked' : '';



echo'
<form action="employer_edit_sucess.php" method="post">
<div id="name_label">ID</div><input type="text" name="id" value="' . $row['id'] . '" readonly > </br>
<div id="name_label">Company Name</div><input type="text" name="employer_name" value="' . $row['employer_name'] . '"> </br>

 <div id="name_label">Job Role </div><input type="text" name="name" value="' . $row['name'] . '"> <br>
<div id="name_label">Salary</div> <input type="text" name="salary" value="' . $row['salary'] . '"> <br>
<div id="name_label">Role Description</div><br> <textarea name="details" cols="40" rows="30">' . $row['details'] . '</textarea> <br>
<div id="name_label">Job Category</div>

  
  <label class="control control--radio">Developer
  <input type="radio" name="category" value="Developer" checked=$dev_check>
  
    <div class="control__indicator"></div>
  </label>
<label class="control control--radio"> IT 
    <input type="radio" name="category" value="IT" checked=$IT_check>
    <div class="control__indicator"></div>
  </label>

<label class="control control--radio"> QA 
  <input type="radio" name="category" value="QA checked=$QA_check"> 
    <div class="control__indicator"></div>
  </label>
<div id="name_label">Job Level</div>
<label class="control control--radio"> VP Level
  <input type="radio" name="job_level" value="VP" checked=$VP_check> 
    <div class="control__indicator"></div>
  </label>
  

  
<label class="control control--radio"> Senior Level 
  <input type="radio" name="job_level" value="Senior" checked=$Senior_check>
    <div class="control__indicator"></div>
  </label>

  
<label class="control control--radio"> Mid-Level
  <input type="radio" name="job_level" value="Mid-level" checked=$Mid_check> 
    <div class="control__indicator"></div>
  </label>
  
<label class="control control--radio"> Entry 
  <input type="radio" name="job_level" value="Entry"  checked=$entry_check>
    <div class="control__indicator"></div>
  </label>
<label class="control control--radio"> Internship/Co-Op 
  <input type="radio" name="job_level" value="Internship/Co-Op"  checked=$Intern_check>
    <div class="control__indicator"></div>
  </label>
  
<div id="name_label">City</div><input type="text" name="location_city" value="' . $row['location_city'] . '"> <br> 
<div id="name_label">Country</div><input type="text" name="location_country"value="' . $row['location_country'] . '" ><br>
<div id="name_label">Job Type</div><input type="text" name="job_type" ><br>

<div id="name_label">Job Time</div>
 <label class="control control--radio"> Full-Time 
 <input type="radio" name="job_time" value="Full-Time"  checked=$fulltime_check> 
    <div class="control__indicator"></div>
  </label>

<label class="control control--radio"> Part-Time
  <input type="radio" name="job_time" value="Part-Time" checked=$parttime_check> 
    <div class="control__indicator"></div>
  </label>

<label class="control control--radio"> Contract
  <input type="radio" name="job_time" value="Contract" checked=$contract_check>
    <div class="control__indicator"></div>
  </label>

<br>
<div id="name_label">Sponsorship</div>
<label class="control control--radio"> Yes
 <input type="radio" name="sponsorship" value="Yes"  checked=$sponsorYes_check> 
    <div class="control__indicator"></div>
  </label>
<label class="control control--radio"> No
   <input type="radio" name="sponsorship" value="No"  checked=$sponsorNo_check>
    <div class="control__indicator"></div>
  </label>
<br>
<div id="name_label">Equity</div> <input type="text" name="equity" value="' . $row['equity'] . '"><br>
<input type="submit" value="Confirm Changes"></form>';


?>