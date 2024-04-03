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
$userid = $_POST['user_id'];
$provided_password = $_POST['password'];

// SQL Query checking user login
$sql = "SELECT user_id, first_name, surname, password FROM users WHERE email='$email' AND user_id='$userid'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // User found, fetch hashed password
    $row = $result->fetch_assoc();
    $hashed_password_from_db = $row['password'];

    // Verify password
    if (password_verify($provided_password, $hashed_password_from_db)) {


        // Retrieve user information from login form
        $email = $_POST['email'];
        $userid = $_POST['user_id'];

        // set session variables with user data
        $_SESSION['user_id'] = $userid;
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['surname'] = $row['surname'];

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


