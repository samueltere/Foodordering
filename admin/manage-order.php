<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Manage order</h1>

           <br /><br><br />

       <table class="tbl-full">
            <tr>
                <th>S.N</th>
                <th>Quantity</th>
                <th>Order Date</th>
                <th>cust-Name</th>
                <th>cust_contact</th>
                <th>cust_email</th>
                <th>cust_adderss</th>
                <th>Actions</th>
            </tr>
            
        
        <?php 

// Query Program to see Admins to webpage
 
 $sql = "SELECT * FROM tbl_order";
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
             $qty = $rows['qty'];
             $date = $rows['order_date'];
             $customer_name=$rows['customer_name'];
             $customer_contact=$rows['customer_contact'];
             $customer_emai = $rows['customer_email'];
             $customer_address = $rows['customer_address'];

             // Display the values in our table
            ?>

              <tr>
                      <td><?php echo $sn++; ?></td>
                      <td><?php echo $qty; ?></td>
                      <td><?php echo $date; ?></td>
                      <td><?php echo $customer_name; ?></td>
                      <td><?php echo $customer_contact; ?></td>
                      <td><?php echo $customer_emai; ?> </td>
                      <td><?php echo $customer_address; ?> </td>
                      <td>
                         
                         <a href="#" class="btn-secondary"> Update order</a>
                          <a href="#" class="btn-danger"> Delete order</a>
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

<?php include('partials/footer.php'); ?>