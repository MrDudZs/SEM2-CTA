<?php
session_start();
include '../config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Get user ID from session
$user_id = $_SESSION['user_id'];

// Get file data
$file_name = $_FILES['file']['name'];
$file_temp = $_FILES['file']['tmp_name'];
$file_type = $_FILES['file']['type'];

// Get form data
$currency_from = $_POST['fromCurrency'];
$amount_from = $_POST['transferAmount'];
$currency_to = $_POST['toCurrency'];
$amount_to = $_POST['amount_to'];

$uploaded_by = $_SESSION['user_id'];
$upload_date = date('y-m-d');
$upload_time = date('H-i-s');

$sql = "INSERT INTO exchange_request (doc_name, upload_date, upload_time, uploaded_by, currency_from, currency_to, amount_from, amount_to) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssiisdd", $file_name, $upload_date, $upload_time, $uploaded_by, $currency_from, $currency_to, $amount_from, $amount_to);

if ($stmt->execute()) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $wallet_id = $_POST["toCurrency"];
        $funds = $_POST["amount_to"];


        // Prepare the SQL query to fetch the currency_id based on the provided currency_name ($wallet_id)
        $sql_get_wallet_id = "SELECT currency_id FROM currency WHERE currency_name = ?";
        $stmt_get_wallet_id = $conn->prepare($sql_get_wallet_id);
        $stmt_get_wallet_id->bind_param("s", $wallet_id);
        $stmt_get_wallet_id->execute();
        $stmt_get_wallet_id->bind_result($wallet_id_from);
        $stmt_get_wallet_id->fetch();
        $stmt_get_wallet_id->close();


        $sql_update_funds = "UPDATE wallet SET balance = balance + $funds WHERE currency_id = $wallet_id_from";
        $result = $conn->query($sql_update_funds);
        if ($result == TRUE) {
            $currency_from = $_POST['fromCurrency'];
            $amount_from = $_POST['transferAmount'];

            $sql_get_wallet_id_to = "SELECT currency_id FROM currency WHERE currency_name = ?";
            $stmt_get_wallet_id_to = $conn->prepare($sql_get_wallet_id_to);
            $stmt_get_wallet_id_to->bind_param("s", $currency_from);
            $stmt_get_wallet_id_to->execute();
            $stmt_get_wallet_id_to->bind_result($wallet_id_to);
            $stmt_get_wallet_id_to->fetch();
            $stmt_get_wallet_id_to->close();
            $sql_update_funds = "UPDATE wallet SET balance = balance - $amount_from WHERE currency_id = $wallet_id_to";
            $result = $conn->query($sql_update_funds);

            header("Location: ../../wallet.php");
        }
    }

} else {
    echo "Error updating table: " . $stmt->error;
}

$stmt->close();

