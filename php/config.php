<?php

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
