<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage category</h1>
        <br /><br />
       <br>
        <?php
               if(isset($_SESSION['add']))
               {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
               }
          
          
          ?>
          <br> <br>

       <!-- button to add category-->
       <a href="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category</a>
           <br /><br><br />

       <table class="tbl-full">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Image Name</th>
                <th>actions</th>
            </tr>
            
            <tr>
                <td>1.</td>
                <td>shero feses</td>
                <td>shhe.jpg</td>
                <td>
                    <a href="#" class="btn-secondary"> Update Catagory</a>
                    <a href="#" class="btn-danger"> Delete Catagory</a>
                </td>
            </tr>  
            <tr>
                <td>2.</td>
                <td>pasta be enkulal</td>
                <td>pasta.jpg</td>
                <td>
                <a href="#" class="btn-secondary"> Update Catagory</a>
                <a href="#" class="btn-danger"> Delete Catagory</a>
  
                </td>
            </tr>  
            <tr>
                <td>3.</td>
                <td>enjara ferfer</td>
                <td>ferfer.jpg</td>
                <td>
                <a href="#" class="btn-secondary"> Update Catagory</a>
                <a href="#" class="btn-danger"> Delete Catagory</a>
                
                </td>
            </tr>  
        </table>
    </div>
</div>

<?php include('partials/footer.php'); ?>