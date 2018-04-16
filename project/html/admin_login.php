<?php

   include("dbAccess.php");
include('bottom_nav.html');

 $db = new mysqli($hn, $un, $pw, $db);
  if ($db->connect_error) die($db->connect_error);

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['ausername']);
      $mypassword = mysqli_real_escape_string($db,$_POST['apassword']); 
  
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      
      $count = mysqli_num_rows($result);

      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['admin_user'] = $myusername;
         
         header("location: admin_home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
     <link rel='stylesheet' type='text/css' href='../css/login.css' />
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	

   <h1> Admin Login Portal </h1> 
               
               <form action = "" method = "post">
                  <label>Username  :</label><input type = "text" name = "ausername" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "apassword" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:20px; color:#cc0000; margin-top:10px; text-align: center"><?php echo $error; ?></div>
		
				
         </div>
			
      </div>

   </body>
</html>