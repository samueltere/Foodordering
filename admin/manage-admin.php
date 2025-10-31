<?php include('partials/menu.php'); ?>

    <!--main content section starts -->
    <div class="main-content">
    <div class="wrapper">
       <h1>Manage Admin</h1>
            <br />

        <?php 
        //To display Message in page from constat.php
          if(isset($_SESSION['add']))
          {
               echo $_SESSION['add'];   //display Session Message
               unset($_SESSION['add']);  // Removing the Session message after Once it Displyed 

          }   

          if(isset($_SESSION['delete']))
          {
               echo $_SESSION['delete'];   //display Session Message to Admin is Deleted
               unset($_SESSION['delete']);  // Removing the Session message after Once it Displyed 

          }  
          if(isset($_SESSION['update']))
          {
              echo $_SESSION['update'];
              unset($_SESSION['update']);


          }  
          
          if(isset($_SESSION['user-not-found']))
          {
            echo $_SESSION['user-not-found'];
            unset($_SESSION['user-not-found']);
          }
          
          if(isset($_SESSION['pwd-not-match']))
          {
           echo $_SESSION['pwd-not-match'];
           unset($_SESSION['pwd-not-match']);

          }
          if(isset($_SESSION['change-pwd']))
          {
            echo $_SESSION['change-pwd'];
            unset($_SESSION['change-pwd']);
          }
        
        ?>

       <br><br><br>


       <!-- button to add Admin-->
       <a href="add-admin.php" class="btn-primary">Add Admin</a>
           <br /><br><br />

       <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>actions</th>
            </tr>

            <?php 

            // Query Program to see Admins to webpage
             
             $sql = "SELECT * FROM tbl_admin";
            // Excute the Query 
             $res = mysqli_query($conn, $sql);

             // Check whether the query is Excuted or not

             if($res==TRUE)
             {
                // count Rows to Cheack whether we have Data in Database or not
                $count = mysqli_num_rows($res); // funciton to get all the rows in Database

                  $sn=1;// create a Variable and assign the value

                //Check the number of rows
                if($count>0)
                {
                  
                   //We Do Not Have Data in the Database 
                   while($rows=mysqli_fetch_assoc($res))
                   {
                       /* using while loop to get all the Data from Database
                        And while loop will run as long as we have Data in a Database */
                   
                         //Get individual Data
                         $id=$rows['id'];
                         $full_name=$rows['full_name'];
                         $username=$rows['username'];

                         // Display the values in our table
                        ?>

                          <tr>
                                  <td><?php echo $sn++; ?></td>
                                  <td><?php echo $full_name; ?></td>
                                  <td><?php echo $username; ?></td>
                                  <td>
                                     <a href="<?php echo SITEURL; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary" >Change Password</a>
                                     <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?> " class="btn-secondary"> Update Admin</a>
                                      <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger"> Delete Admin</a>
                                  </td>
                          </tr> 

                        <?php
                
                        }
                      }
                else
                {
                  
                        

                  //we do not have data in the data base

                         

  
  
                        }

                }
             
            
              ?>
            
            
        </table>
        
     </div>
    </div>
    <!-- mai contents Ends-->
    
    <?php include('partials/footer.php'); ?>