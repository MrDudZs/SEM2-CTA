<?php
session_start();
include '../config.php';
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$card_name = $_POST["name"];
$card_number = $_POST["number"];
$card_expiry = $_POST["expiry"];
$card_cvv = $_POST["cvv"];


// Generate a random encryption key and IV
$key = openssl_random_pseudo_bytes(32);
$iv = openssl_random_pseudo_bytes(16);

// Encrypt the sensitive data
$encrypted_name = openssl_encrypt($card_name, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
$encrypted_number = openssl_encrypt($card_number, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
$encrypted_expiry = openssl_encrypt($card_expiry, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);
$encrypted_cvv = openssl_encrypt($card_cvv, 'aes-256-cbc', $key, OPENSSL_RAW_DATA, $iv);

// Convert encrypted data to base64 for storage or transmission
$encoded_name = base64_encode($encrypted_name);
$encoded_number = base64_encode($encrypted_number);
$encoded_expiry = base64_encode($encrypted_expiry);
$encoded_cvv = base64_encode($encrypted_cvv);

// Use prepared statements to prevent SQL injection
$sql = "INSERT INTO piggybank (card_name, card_number, card_expiry) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $encoded_name, $encoded_number, $encoded_expiry);

if ($stmt->execute()) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $wallet_id = $_POST["currency"];
        $funds = $_POST["funds"];

        $sql_update_funds = "UPDATE wallet SET balance = balance + ? WHERE wallet_id = ?";
        $stmt_update_funds = $conn->prepare($sql_update_funds);
        $stmt_update_funds->bind_param("di", $funds, $wallet_id);

        if ($stmt_update_funds->execute()) {
            header("Location: ../../wallet.php");
            exit();
        } else {
            echo "Error updating table: " . $stmt_update_funds->error;
        }

        $stmt_update_funds->close();
    }

} else {
    echo "Error updating table: " . $stmt->error;
}

$stmt->close();
$conn->close();


// https://www.youtube.com/watch?v=OK_JCtrrv-c
// https://www.phpclasses.org/
// https://www.php.net/manual/en/book.openssl.php
// https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php