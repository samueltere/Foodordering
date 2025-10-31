 <?php

//start Session
session_start();






//create constants to stopre none repeating value
    define('SITEURL', 'http://localhost/food-order/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order');



$conn =mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());//Database connection to wanmpserver

$db_select = mysqli_select_db($conn,  DB_NAME) or die(mysqli_error());//To select database from database server

 ?>