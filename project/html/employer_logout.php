<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: employer_login.php");
   }
?>