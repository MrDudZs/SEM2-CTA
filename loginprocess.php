<?php
session_start();

// Connection
include 'php/config.php';

//Check connection

if ($conn->connect_error) {
    die ("connection failed: " . $conn->connect_error);
}

// get form data
$email = $_POST['email'];
$userid = $_POST['user_id'];
$provided_password = $_POST['password'];

// SQL Query checking user login
$sql = "SELECT user_id, first_name, surname, password, is_suspended FROM users WHERE email='$email' AND user_id='$userid'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $hashed_password_from_db = $row['password'];
    $is_suspended = $row['is_suspended'];


    // Verify password
    if (password_verify($provided_password, $hashed_password_from_db)) {
        if ($is_suspended == 1) {
            // Account is suspended, redirect back to login page with error message
            $_SESSION['login_error'] = "Your account is suspended. Please contact support.";
            header("Location: login.php");
            exit;
        } else {

            // Retrieve user information from login form
            $email = $_POST['email'];
            $userid = $_POST['user_id'];

            // set session variables with user data
            $_SESSION['user_id'] = $userid;
            $_SESSION['email'] = $email;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['surname'] = $row['surname'];

            echo "Login Successful!";
            header("Location: dashboard.php");
            exit;
        }
    } else {
        echo "Invalid email or user ID";
        header("Location: login.php");
        // ADD ECHO TO PAGE TO SHOW SUSPENSION
        exit;
    }

}


