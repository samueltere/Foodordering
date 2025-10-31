<?php include('../config/constants.php') ?>


<html>
    <head>
        <title>
            Login - Food Order System
        </title>
        <!--<link rel="stylesheet" href="../css/admin.css"> -->
        <link rel = "stylesheet" href="css for login.css">
    </head>
    <body>
        
    <div class="login">



        <h1 class="text-center">Login</h1>
            <br>
            <h3> Please Login To Access Admin Panal</h3>
           <?php 
             if(isset($_SESSION['login']))
             {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
             }
             if(isset($_SESSION['no-login-message']))
             {
                echo $_SESSION['no-login-message'];
                unset($_SESSION['no-login-message']);
             }
           
           ?>
           <br>

         <!-- Logi form Starts here-->
           <form action="" method="POST" class="text-center"> <br>
           Username: <br>
           <input type="text" name="username" placeholder="Enter User Name"> <br><br>
           Password: <br>
           <input type="password" name="password" placeholder="Enter Password"> <br><br>
           <input type="submit" name="submit" value="Login" class="btn-primary">  <br> <br> <br>
           </form>
         <!-- Logi form Ends here-->


        <p class="text-center">Created By- <a href="#">Samuel Terefe</a></p>
    </div>
    </body>
</html>




<?php
  //Check whether the submit button is Clicked or Not  
     if(isset($_POST['submit']))
    {
        //process for login
        //Get the data from longing form
      $username = $_POST['username'];
      $password = md5($_POST['password']);
        //QSL  query to check the youser with username and password is exist or not
        $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password' ";
       
        //3. Execute query
        $res = mysqli_query($conn, $sql);
      

       //4. count rows to check whether the user is exsit or not
        $count = mysqli_num_rows($res);
        if($count==1)
        {
            //user available and login succcess
            $_SESSION['login'] = "Login Successfully";
            $_SESSION['user'] = $username; // To check the whether the user is logged in logout will unset it
            // Redirect to Homepage/Dashbord
            header('location:'.SITEURL.'admin/');
        }
        else
        {
            //user not avaliable loglin fail
            $_SESSION['login'] = "Username or Password didn't Match";
            // Redirect to Homepage/Dashbord
            header('location:'.SITEURL.'admin/login.php');
        } 
    }

?>