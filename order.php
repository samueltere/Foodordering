
<?php include('partials-front/menu.php'); ?>


    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <br><br>
            <?php 
           
           if(isset($_session['add-order'])) //cheaking whether the Session seted ot not
           {
            echo $_SESSION['add-order']; // Display session message
            unset($_SESSION['add-order']); //Remove Session message 
           }
          
          
          
          ?>

            <form action="" class="order" method="POST">
                <fieldset>
                    <legend>Selected Food</legend>

                    <div class="food-menu-img">
                        <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3>Selected Food</h3>
                        <p class="food-price">150ETB</p>

                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="customer_name" placeholder="E.g. Samuel Terefe" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="customer_contact" placeholder="E.g. +2519xxxxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="customer_email" placeholder="E.g. samueltrefe808@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea  name="customer_address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->


    <?php
    //Process value from form and save into database
    // cheack the button is clicked or not
    if(isset($_POST['submit']))
    {
        // echo "button is clicked";
        $qty = $_POST['qty'];

        $customer_name = $_POST['customer_name'];
        $customer_contact = $_POST['customer_contact'];
        $customer_email = $_POST['customer_email'];
        $customer_address = $_POST['customer_address'];

        // SQL query to insert data into database
        $date = date('Y-m-d');
        $sql = " INSERT INTO tbl_order SET
            qty = $qty,
            order_date = '$date',
            customer_name = '$customer_name',
            customer_contact = '$customer_contact',
            customer_email = '$customer_email',
            customer_address = '$customer_address'
            ";
             //3.Excuting query and saving Data into Database

    $res =mysqli_query($conn, $sql) or die(mysqli_error);

    //4. check the (Query is executed) data is insertend or not and display apropreate message
     if($res==TRUE)
     {
      //Data inserted
      //echo "Data Inserted";
// create variable to Display Messege
$_SESSION['add-order'] = "order Added Successfuly";      

//Redirect page to Manage Admin
header("location:" . SITEURL.'foods.php');



     }
     else
     {
// falied to insert data
//echo "Failed to Insert Data";

          // create variable to Display Messege
                $_SESSION['add-order'] = "Failed to add order";      

          //Redirect page to Add food
          header("location:" . SITEURL.'order.php');

     }


    }
    
    
    ?>


    <?php include('partials-front/footer.php'); ?>
