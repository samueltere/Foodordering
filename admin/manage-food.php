<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food</h1>
        <br /><br />
       <!-- button to add food-->
       <a href="<?php echo SITEURL; ?>admin/add-food.php" class="btn-primary">Add Food</a>
           <br /><br><br />

           <?php
           if(isset($_SESSION['add']))
           {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
           }
           
           ?>

       <table class="tbl-full-food">
            <tr>
                <th>Id</th>
                <th>title</th>
                <th>description</th>
                <th>price</th>
                <th>Image Name</th>
                <th>Catagory Id</th>
                <th>Actions</th>


            </tr>
            
            <tr>
                <td>1.</td>
                <td>shero feses</td>
                <td>details about the fod</td>
                <td>ETb<tb>
                <td>shhe.jpg<tb>
                <td>1<tb>
                 


                <td>
                    <a href="#" class="btn-secondary"> Update food</a>
                    <a href="#" class="btn-danger"> Delete food</a>
                </td>
            </tr>  
            <tr>
                <td>2.</td>
                <td>aynet</td>
                <td>details about the fod</td>
                <td>ETb<tb>
                <td>ayy.jpg<tb>
                <td>2<tb>


                <td>
                    <a href="#" class="btn-secondary"> Update food</a>
                    <a href="#" class="btn-danger"> Delete food</a>
                </td>
            </tr>  
            <tr>
                <td>2.</td>
                <td>pasta be enkulal</td>
                <td>details about the fod</td>
                <td>ETb<tb>
                <td>pasta.jpg<tb>
                <td>3<tb>
                <td>
                <a href="#" class="btn-secondary"> Update Food</a>
                <a href="#" class="btn-danger"> Delete Food</a>
                
                </td>
            </tr>  
        </table>
    </div>
</div>

<?php include('partials/footer.php'); ?>