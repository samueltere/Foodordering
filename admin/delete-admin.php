<?php

// include constant.php file here
  include('../config/constants.php');


// 1. Get the ID of Admin to be deleted
     $id = $_GET['id'];
// 2. Create SQL query to delete Admin
     $sql="DELETE FROM tbl_admin WHERE id=$id";
     
     
 // Excute the query
 $res = mysqli_query($conn, $sql);

 // Check whether the Query excuted successfully or not
   if($res) 
   {
      // Query successfully excuted and Admin  Deleted
      // echo "Admin Deleted";
        // Create Session Variable to display Meassege
          $_SESSION['delete'] = "Admin Deleted Successfully";
          
        // Redirect to Manage Admin page
        header('location:'.SITEURL.'admin/manage-admin.php');

   }
    else
    {
       //Query Failed to success and can't Delete admin
       // echo "Falied to Delete The Admin";
       
        $_SESSION['delete']="Falied to Delete Admin. try Again Later";
        header('location:'.SITEURL.'admin/manage-admin.php');

    }


//3. Redirect to Manage Admin page with message(success/error) 



?>