
<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
         <h1>Add Admin</h1>
          <br><br>

          <?php 
           
           if(isset($_session['add'])) //cheaking whether the Session seted ot not
           {
            echo $_SESSION['add']; // Display session message
            unset($_SESSION['add']); //Remove Session message 
           }
          
          
          
          ?>



        <form action="" method="POST">
             
              <table class="tbl-34">
                  <tr>
                       <td>Full Name:</td>
                       <td>
                        <input type="text" name="full_name" placeholder="Enter your name">
                       </td>
                  </tr>

                  <tr>
                      <td>Username:</td>
                      <td>
                        <input type="text" name="username" placeholder="your Username">
                      </td>
                 </tr>
                 <tr>
                      <td>password:</td>
                      <td>
                        <input type="password" name="password" placeholder="your Password">
                      </td>
                 </tr>
           
                 <tr>
                      <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">

              </table>
        </form>                



    </div>
</div>

<?php include('partials/footer.php'); ?>

<?php
//process the value from form and save it in database
// check the submit botton is clicked or not
if(isset($_POST['submit']))
{
    //botton clicked
   
    //botton not clicked
    //1.Get  the data from form
    $full_name=$_POST['full_name'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);//decrepting password
 
    //2.SQL Query to get data into database
    $sql ="INSERT INTO tbl_admin SET 
 
    full_name='$full_name',
    username='$username',
    password='$password'  
    ";
   
     //3.Excuting query and saving Data into Database

    $res =mysqli_query($conn, $sql) or die(mysqli_error);

    //4. check the (Query is executed) data is insertend or not and display apropreate message
     if($res==TRUE)
     {
      //Data inserted
      //echo "Data Inserted";
// create variable to Display Messege
$_SESSION['add'] = "Admin Added Successfuly";      

//Redirect page to Manage Admin
header("location:" . SITEURL.'admin/manage-admin.php');



     }
     else
     {
// falied to insert data
//echo "Failed to Insert Data";

          // create variable to Display Messege
                $_SESSION['add'] = "Failed to Admin";      

          //Redirect page to Add Admin
          header("location:" . SITEURL.'admin/add-admin.php');

     }

}

?>