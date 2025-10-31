<?php
//include constant.php for SITEURl
  include('../config/constants.php');
 //1. Desrtory the session
   session_destroy();



// 2 Redirect to login page
header('location:'.SITEURL.'admin/login.php');



?>