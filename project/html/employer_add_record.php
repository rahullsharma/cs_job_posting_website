<?php
include('employer_topnav.html');
include('session.php');

echo "<link rel='stylesheet' type='text/css' href='../css/employer_portal.css' />";

echo <<<_END
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="../js/radio.js"></script>
<title>Direct Post - Add a Job </title>
  <form action="sucessfully_added.php" method="post">
<div id="name_label">Company Name</div><input type="text" name="employer_name" readonly value="$login_cname"> </br>

  <div id="name_label">Job Role Name</div><input type="text" name="name"> <br>
    <div id="name_label">Salary</div><input type="text" name="salary"> <br>
  <div id="name_label">Description</div><br> <textarea name="details" cols="40" rows="30"></textarea> <br>

  <div id="name_label">Job Category</div> <br>


	
	<label class="control control--radio">Developer
  <input type="radio" name="category" value="Developer"> 
		<div class="control__indicator"></div>
	</label>
<label class="control control--radio"> IT 
	  <input type="radio" name="category" value="IT">
		<div class="control__indicator"></div>
	</label>

<label class="control control--radio"> QA 
  <input type="radio" name="category" value="QA"> 
		<div class="control__indicator"></div>
	</label>
	

  <div id="name_label">Job Level</div> <br>

<label class="control control--radio"> VP Level
  <input type="radio" name="job_level" value="VP"> 
		<div class="control__indicator"></div>
	</label>
	

	
<label class="control control--radio"> Senior Level 
  <input type="radio" name="job_level" value="Senior"> 
		<div class="control__indicator"></div>
	</label>
<label class="control control--radio"> Mid-Level
  <input type="radio" name="job_level" value="Mid-level"> 
		<div class="control__indicator"></div>
	</label>
	
<label class="control control--radio"> Entry 
  <input type="radio" name="job_level" value="Entry">
		<div class="control__indicator"></div>
	</label>
<label class="control control--radio"> Internship/Co-Op 
  <input type="radio" name="job_level" value="Internship/Co-Op">
		<div class="control__indicator"></div>
	</label>
	



  <div id="name_label">City</div><input type="text" name="location_city"><br> 
  <div id="name_label">Country</div><input type="text" name="location_country"><br>
  <div id="name_label">Job Type</div><input type="text" name="job_type"><br>

  <div id="name_label">Job Time</div>
 <label class="control control--radio"> Full-Time 
 <input type="radio" name="job_time" value="Full-Time"> 
		<div class="control__indicator"></div>
	</label>

<label class="control control--radio"> Part-Time
  <input type="radio" name="job_time" value="Part-Time"> 
		<div class="control__indicator"></div>
	</label>

<label class="control control--radio"> Contract
  <input type="radio" name="job_time" value="Contract">
		<div class="control__indicator"></div>
	</label>


<br>
  <div id="name_label">Sponsorship</div>
<label class="control control--radio"> Yes
 <input type="radio" name="sponsorship" value="Yes" > 
		<div class="control__indicator"></div>
	</label>
<label class="control control--radio"> No
   <input type="radio" name="sponsorship" value="No" >
		<div class="control__indicator"></div>
	</label>






<br>
  <div id="name_label">Equity</div> <input type="text" name="equity"><br>



  <input type="submit" value="Confirm Add"></form>
_END;

?>