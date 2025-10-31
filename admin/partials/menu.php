<?php include('../config/constants.php');// shortest way to add DATABASE constansts in every page 

 // include('login-check.php');  
?>
<!-- <?php include('login-check.php'); ?> -->
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


<html>
    <head>
        <title>Ashu delivery-home page</title>
        <link rel="stylesheet" href="../css/admin.css">
   </head>
   <body class="main-content">
    <!--menu section starts -->
    <div class="menu text-center">
        <div class="wrapper">
             <ul>
             <li><a href="index.php">Home</a></li>
             <li><a href="manage-admin.php">admin</a></li>
             <li><a href="manage-category.php">catagory</a></li>
             <li><a href="manage-food.php">food</a></li>
             <li><a href="manage-order.php">order</a></li>
             <li><a href="logout.php">Logout</a></li>

             
             </ul>
        </div>
    </div>
    <!--menu section ends here-->