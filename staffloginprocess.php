<?php
session_start();

// Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'currency_transfer_app';

$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection

if ($conn->connect_error) {
    die ("connection failed: " . $conn->connect_error);
}




// retreive form data
$email = $_POST['email'];
$staffid = $_POST['staff_id'];
$provided_password = $_POST['password'];

// SQL Query checking staff login
$sql = "SELECT id FROM staff WHERE email='$email' AND staff_id='$staffid' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User found, fetch hashed password
    $row = $result->fetch_assoc();
    $hashed_password_from_db = $row['password'];

    // Verify password
    if (password_verify($provided_password, $hashed_password_from_db)) {


        // Retrieve user information from login form
        $email = $_POST['email'];
        $staffid = $_POST['staff_id'];

        // Combine first and last name
        // $getname = "SELECT first_name, surname AS whole_name FROM users WHERE email='$email' AND user_id='$userid'";

        // Assuming you have retrieved user information from the database,
        // set session variables with user data
        $_SESSION['staff_id'] = $staffid;
        $_SESSION['email'] = $email;

        // Login successful
        echo "Login Successful!";
        header("Location: dashboard.php");
        exit;
    } else {
        // if user_id or email is incorrect
        echo "Invalid email or user ID";
        header("Location: login.php");
        exit;
    }

}


