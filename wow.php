<?php include('..admin/config/constants.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Signup</title>
</head>
<body>
    <h2>User Signup</h2>
    <form action="signup.php" method="POST">
        <label for="customer_id">Customer ID:</label>
        <input type="text" name="customer_id" required><br><br>

        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br><br>

        <label for="email">Email Address:</label>
        <input type="email" name="email" required><br><br>

        <label for="password">New Password:</label>
        <input type="password" name="password" required><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" required><br><br>

        <input type="submit" value="Sign Up">
    </form>
</body>
</html>
<?php
// Retrieve form data
if(isset($_POST['submit']))
{ 
$customer_id = $_POST['customer_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password =md5( $_POST['password']);
$confirm_password = md5($_POST['confirm_password']);

// Validate form data (you can add more validation as per your requirements)

if (empty($customer_id) || empty($first_name) || empty($last_name) || empty($username) || empty($phone) || empty($email) || empty($password) || empty($confirm_password)) {
    // Handle error - Missing required fields
    echo "Please fill in all the required fields.";
    exit();
}

if ($password !== $confirm_password) {
    // Handle error - Passwords do not match
    echo "Passwords do not match.";
    exit();
}


// Insert customer into the database
$sql = "INSERT INTO customers (customer_id, first_name, last_name, username, phone, email, password) VALUES ('$customer_id', '$first_name', '$last_name', '$username', '$phone', '$email', '$password')";

//3. Execute query
$res = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
    // Registration successful
    echo "Registration successful!";
} else {
    // Handle error - Database error
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>