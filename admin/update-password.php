<?php include('partials/menu.php'); ?>
   <div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br><br>

        <?php
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
            }
        
        ?>

          <form action="" method="POST">


                 <table class="tbl-34">

                          <tr>
                                 <td>Current Password </td>
                                 <td>
                                    <input type="password" name="current_password" placeholder="current Password">
                                 </td>

                          </tr>

                          <tr>
                                <td>New Password:</td>
                                <td>
                                    <input type="password" name="new_password" placeholder="new password">
                                </td>
                          </tr>

                          <tr>
                                 <td>Confirm Password</td>
                                 <td>
                                    <input type="password" name="confirm_password" placeholder="confirm password">
                                </td>
                          </tr>

                        <tr>
                                 <td colspan="2">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <input type="submit" name="submit" value="Change Password" class="btn-secondary">
                                 </td>

                        </tr>

                 </table>



          </form>

    </div>
   </div>

<?php
  if(isset($_POST['submit']))
  {
    //echo "clicked";
    //1. Get the DAta from form
         $id=$_POST['id'];
         $current_password = md5($_POST['current_password']);
         $new_password = md5($_POST['new_password']);
         $confirm_password = md5($_POST['confirm_password']);

    //2. check whether the user with current ID and Current Password is Exist or not
         $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";
         // Excute the Query
         $res = mysqli_query($conn, $sql);

            if($res==TRUE)
            {
                //check the data is Available or not
                $count=mysqli_num_rows($res);

                if($count==1)
                {
                    // User Exits and Password can be Changed
                    // echo "user is found";
                    if($new_password==$confirm_password)
                    {
                        
                        //echo "password match";
                        // update the password
                          $sql2 = "UPDATE tbl_admin SET 
                           PASSWORD='$new_password'
                           WHERE id=$id
                          
                          ";
                          // Excute the Query
                          $res2 = mysqli_query($conn, $sql2);
                          // Check whether the query is excuted or not
                          if($res2==TRUE)
                          {
                            //display message succes Message
                             //Redirect To Manage Admin Page with success message
                               $_SESSION['change-pwd'] = "Password Changed succesfully";
                               header("location:".SITEURL.'admin/manage-admin.php');
                          }
                          else
                          {
                            //display error message
                              //Redirect To Manage Admin Page with error message
                              $_SESSION['change-pwd'] = "Falied to Change Password";
                              header("location:".SITEURL.'admin/manage-admin.php');
                          }


                    }
                    else
                    {
                        //Redirect To Manage Admin Page with error message
                        $_SESSION['pwd-not-match'] = "Password Does Not Match";
                        header("location:".SITEURL.'admin/manage-admin.php');
                    }
                }
                else
                {
                    // User does not Exist  Set message and Redirect
                    $_SESSION['user-not-found'] = "User Is Not Found";
                    header("location:".SITEURL.'admin/manage-admin.php');
                }
            }

    //3. check whether the new password and confirm password is same or not 
    //4. Change password if all above conditions is correct
  }

?>




<?php include('partials/footer.php'); ?>