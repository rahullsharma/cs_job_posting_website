<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

  include 'bottom_nav.html';

?>

<html>
<head>
<title>DirectPost</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=PT Serif' rel='stylesheet'>

<link rel="stylesheet" type="text/css" href="../css/homepage.css"/>
</head>
<body>


<h1>DirectPost</h1> 
<a href="about.php"><button id="aboutus" class="aboutus">About Us</button></a>
<a href="employerinfo.php"><button id="employerhowto" class="employerhowto">How to Become an Employer</button></a>


<h2>Software Jobs </h2>
<a href="all_posts.php"><button class="alljobsbutton" id="alljobsbutton">View All Jobs</button></a>
<br>




<!-- The form -->
<form method="POST" action="search_posts.php">
  <input type="text" placeholder="Search by Job Title, Company Name, or Technology names" name="search_job_title">
   <input type="submit" name="send" value="Search Jobs" />
</form>

<form method="POST" action="search_posts.php">
  <input type="text" placeholder="Search by City or Country" name="search_location">
   <input type="submit" name="send" value="Search Location" />

</form>









</body>


</html>