<?php include('partials/menu.php');    ?>

<div class="main-content">
      <div class="wrapper">
        <h1>Update Admin</h1>
        <br><br>

         <?php
         //1. Get the Id of selected Admin
               $id=$_GET['id'];
         
         //2. create sql query to Get the details
         $sql="SELECT * FROM tbl_admin Where id=$id;";
         //3. Excute the query
         $res=mysqli_query($conn, $sql);
         //whether the query is excuted or not
         if($res==TRUE)
         {
             //check whether the Data Avilable or not
             $count = mysqli_num_rows($res);

             //check whether we have admin data or not
              if($count==1)
              {
                //Get details 
                // echo "Admin Available";
                $row = mysqli_fetch_assoc($res);
                $full_name   = $row['full_name'];
                $username = $row['username'];
                //$id = $row['id'];
              }
              else
              {
                // Redirect to the Admin page
                header('location:'.SITEURL.'admin/manage-admin.php');
              }
         }
         
         ?>



        <form action="" method="POST">
               
        
              <table class="tbl-34">
                      <tr>

                          <td>Full Name: </td>
                           <td>
                             <input type="text" name="full_name" value="<?php echo $full_name; ?>" >
                           </td>

                      </tr>

                     
                     
                      <tr>
                             <td>username</td>
                             <td>
                                <input type="text" name="username" value="<?php echo $username; ?>">
                             </td>
                     </tr>

                     <tr>
                         <td class="2">
                              <input type="hidden" name="id" value="<?php echo $id; ?>">
                             <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                         </td>
                     </tr>

                 </table>
        
        
        </form>
      </div>
</div>

<?php
        // check whether submit button is clicked or not
        if(isset($_POST['submit']))
        {
          //echo "button is clicked"; 
          // Gt all the values to update
          $id = $_POST['id'];
          $full_name = $_POST['full_name'];
          $username = $_POST['username'];
          
          //create sql query to Update Admin
          $sql = "UPDATE tbl_admin SET

          full_name = '$full_name',
          username = '$username'
          WHERE id='$id'
          ";

          //Excute the query
         $res = mysqli_query($conn, $sql);
          //Check whether the Query is excuted successfully or not
          if($res==TRUE)
          {
            //Query Excuted and admin updated
            $_SESSION['update'] = "Admin Updated Successfully";
            //Redirect to the Manage Admin
            header('location:'.SITEURL.'admin/manage-admin.php');
          }
          else
          {
            //falied to connect
            $_SESSION['update'] = "Falid to Updated Admin";
            //Redirect to the Manage Admin
            header('location:'.SITEURL.'admin/manage-admin.php');
          
          }


        } 
      


?>


<?php include('partials/footer.php'); ?>