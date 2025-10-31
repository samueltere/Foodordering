
<?php include('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Food</h1>
        <br><br>
<?php
        if(isset($_SESSION['upload']))
        {
          echo $_SESSION['upload'];
          unset($_SESSION['upload']);  
        }

?>

        <form action="" method="POST" enctype="multipart/form-data">
        <table class="tbl-34">
                 <tr>
                    <td>Title:</td>
                    <td>
                        <input type="text" name="title" placeholder="Title of the Food">
                    </td>
                 </tr>
                 
                 <tr>
                    <td>Description:</td>
                    <td>
                        <textarea name="description" cols="30" rows="4" placeholder="Description of the Food"></textarea>
                    </td>
                 </tr>
                 
                 <tr>
                    <td>Price:</td>
                    <td>
                    <input type="number" name="price">
                    </td>
                </tr>
                 <tr>
                    <td>Select Image:</td>
                    <td>
                       <input type="file" name="image_name">  
                    </td>
                 </tr>

                 <tr>

                    <td>Catagory:</td>
                    <td>
                        <select name="category_id">
                        <option value="1">Food</option>
                        <option value="2">sancks</option>
                        <option value="3">Drinks</option> 
                       </select>
                    </td>

                 </tr>
               <tr>
                   <td>Featured:</td>
                   <td>
                    <input type="radio" name="featured" value="yes"> Yes
                    <input type="radio" name="featured" value="no">  No
                   </td>
               </tr>

               <tr>
                   <td>Active:</td>
                   <td>
                    <input type="radio" name="active" value="yes"> Yes
                    <input type="radio" name="active" value="no">  No
                   </td>
               </tr>

               <tr>
                <td colspan="2"> 
                    <input type="submit" name="submit" value="Add Food" class="btn-secondary">
                </td>
               </tr>

        </table>



        </form>
     
        <?php
        //Check the button is clicked or not
        if(isset($_POST['submit']))
        {
         //Add the foo in to data base
        // echo  "clicked";
        
        //1.Get the data from form
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $category_id = $_POST['category_id'];
        $image_name = $_POST['image_name'];
        // check whether the radio button for featured and active is set or not
        if(isset($_POST['featured']))
           {
            $featured = $_POST['featured'];

           }
           else
           {
              $featured = "NO"; //setting defalult value

           }
           if(isset($_POST['active']))
           {
            $active = $_POST['active'];

           } 
           else
           {
            $active = "NO"; //setting default value
           }       
        //2.upload the image if selected
         //check whether the  selecte image is clicked or not and upload the image only if the image is selected
         if(isset($_FILES['image_name']['name']))
          {
            //get the details of th selected image
              $image_name = $_FILES['image_name']['name'];
            //check whether the image is selected or not and upload image only if selected
            if($image_name!="")
            {
               //the image is selected
               
                //upload the image
              
                //get src  path and sorce odf destionation
                //Source path is the current location of the image
                $src = $_FILES['image_name']['tmp_name'];

                //destination path for the image to be uploded
                $dst = "../images/food/".$image_name;
               
                //Finaly upload food image
                $upload = move_uploaded_file($src, $dst);

                //check the image is uploaded or not
                if($upload==false)
                {
                    //falied to upload the image
                    // redirect to Add food page wthith error message
                    $_SESSION['upload']= "Falied to Upload";
                    header('location:'.SITEURL.'admin/add-food.php');
                    // stop the process
                    die();
                }
            }


          }
          else
          {
            $image_name=""; // setting default value as blank 
          }
        //3. insert the data into Database

         //Create SQL query to save or add food
         $sql = "INSERT INTO tbl_food SET
          title = '$title',
          description = '$description',
          price = $price,
          image_name = '$image_name',
          category_id = $category_id,
          featured = '$featured'
          active = '$active'

            ";
        
        //Excute the query 
        $res = mysqli_query($conn, $sql);
        //check whether the data is inserted or not
        if($res===true)
        {
            // Data inserted successfully 
 
            $_SESSION['add'] = "Food Inserted successfully";
            header('location:'.SITEURL.'admin/manage-food.php');
        }
        else
        {
           //fail to Insert the data
           $_SESSION['add'] = "Falied to insert the data";
           header('location:'.SITEURL.'admin/manage-food.php');
        }

      


        }

        

        ?>

      

    </div>
</div>
<?php include('partials/footer.php'); ?>