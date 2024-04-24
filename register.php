<?php

session_start();

// Connection
include 'php/config.php';


if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}

$first_name = $_POST['first_name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$password = $_POST['password'];

// Hash password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Set is_suspended to false
$is_suspended = false;

// SQL query to insert user into the database
$sql = "INSERT INTO users (first_name, surname, email, dob, password, is_suspended) 
        VALUES ('$first_name', '$surname', '$email', '$dob', '$hashed_password', '$is_suspended')";

if ($conn->query($sql) === TRUE) {
    $user_id = $conn->insert_id;

    // Insert a record into the wallet table for the user
    $insert_wallet_sql = "INSERT INTO wallet (user_id) VALUES ('$user_id')";
    if ($conn->query($insert_wallet_sql) === TRUE) {
        // Update the users table with the wallet ID
        $wallet_id = $conn->insert_id;
        $update_users_sql = "UPDATE users SET wallet_id='$wallet_id' WHERE user_id='$user_id'";

        
        if ($conn->query($update_users_sql) === TRUE) {


            echo "User registered successfully";
            header("Location: login.php");


        } else {
            echo "Error updating users table: " . $conn->error;
        }
    }
} 

// Close connection
$conn->close();
