<?php
  //Authorization -Access controal
   // Check whether the user is logged in or not
   if(!isset($_SESSION['user'])) //If user session is not set  
     {
         // user is not log in  
        // Redirect to login page with message
        $_SESSION['no-login-message'] = "please login to Access Admin Panel";
         //Redirect to login page
         header('location:'.SITEURL.'admin/login.php'); 
    }
   
?>
