<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
          <h1>Add Catagory</h1>
          <br><br>


          <?php
               if(isset($_SESSION['add']))
               {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
               }
          
          
          ?>

          <!-- Add Category form starts here-->
          <form action="" method="POST">

          <table class="tbl-34" enctype="multipart/form-data">
            <tr>
                <td>Title:</td>
                <td>
                    <input type="text" name="title" placeholder="Category title">
                </td>
            </tr>
             <tr>
                    <td>Featured:</td>
                    <td>
                        <input type="radio" name="featured" value="yes"> YES

                        <input type="radio" name="featured" value="no"> NO

                    </td>
             </tr>

              <tr>

                <td>Select Image:</td>
                <td>
                    <input type="file" name="image" >
                </td>


              </tr>





             <tr>
                    <td>active:</td>
                    <td>
                    <input type="radio" name="active" value="yes"> YES

                    <input type="radio" name="active" value="no"> NO
                    </td>
             </tr>
             <tr>
                    <td colspan="2">
                    <input type="submit" name="submit" value="Add Catagory" class="btn-secondary">
                    </td>
             </tr>

          </table>
          </form>
          <!-- Add Category form ends here -->
        
      <?php
        //check the submit button is clicked
        if(isset($_POST['submit']))
        {
            // echo "clicked";
            // Get the value from Catagory form
            $title = $_POST['title'];

            // for radio input type we need the button is selected or not
             if(isset($_POST['featured']))
             {
                // get the value from form
                
                $featured = $_POST['featured'];
             }
              else
              {
                // set default value
                $featured = "NO";
              }
              if(isset($_POST['active']))
              {
                $active = $_POST['active'];

              }
              else
              {
                $active = "NO";
              }

                // chech whether the imager is selected or not and set the value for image accordingly

                 //   echo $_FILES['image'];
              //  die(); // break the code
                 if(isset($_FILES['image'] ['name']))
                 {
                  //upload the image 
                  //to upload image we need image name and src path dst path
                  $image_name = $_FILES['image']['name'];
                  $source_path = $_FILES['image']['tmp_name'];
                  $destination_path = "../images/category/".$image_name;
                  //finally upload the image
                  $upload = move_uploaded_file($source_path, $destination_path );
                
                 }
                 else
                 {
                  //dont upload image and set image value as blank
                 }

               //2. create the sql query to insert Category into tbl_category table
                $sql = "INSERT INTO tbl_category SET
                   title ='$title',
                   featured = '$featured',
                   active = '$active'
                
                 ";

                 // 3 Excute the quer and save u8n to database
                 $res = mysqli_query($conn, $sql);
                // 4 check whethere the query is excuted or not 
                if($res==true)
                {
                  // Query Excuted and category add 
                   $_SESSION['add'] = "category Added successfuly";
                   header('location:'.SITEURL.'admin/manage-category.php');
                }
                else
                {
                    //falied to Add catrgory
                    $_SESSION['add'] = "falied to add category";
                   header('location:'.SITEURL.'admin/add-category.php');
                }
        }
      ?>  
        </div>
  </div>


<?php include('partials/footer.php'); ?>
