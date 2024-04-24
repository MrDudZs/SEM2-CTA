<?php
session_start();
include '../config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user ID from the session
    $user_id = $_SESSION['user_id'];

    // Check how many wallets the user currently owns
    $sql_count_wallets = "SELECT COUNT(wallet_id) AS wallets_owned FROM wallet WHERE user_id = ?";
    $stmt_count_wallets = $conn->prepare($sql_count_wallets);
    $stmt_count_wallets->bind_param("i", $user_id);
    $stmt_count_wallets->execute();
    $stmt_count_wallets->bind_result($wallets_owned);
    $stmt_count_wallets->fetch();
    $stmt_count_wallets->close();

    // Check if the user can create a new wallet (maximum 3 wallets allowed)
    if ($wallets_owned < 3) {
        // Check if currency is selected
        if (isset($_POST["currency"]) && !empty($_POST["currency"])) {
            $currency_id = $_POST["currency"];
            $initial_balance = 0;
            $new_wallet_index = $wallets_owned + 1; // Increment wallet index

            // Insert new wallet
            $sql_insert_wallet = "INSERT INTO wallet (user_id, currency_id, balance, is_main) VALUES (?, ?, ?, ?)";
            $stmt_insert_wallet = $conn->prepare($sql_insert_wallet);
            $stmt_insert_wallet->bind_param("iiii", $user_id, $currency_id, $initial_balance, $new_wallet_index);

            if ($stmt_insert_wallet->execute()) {
                echo "Wallet created successfully.";
                header("Location: ..\..\wallet.php");
                exit(); // Ensure no further code execution after redirect
            } else {
                echo "Error creating wallet: " . $stmt_insert_wallet->error;
            }

            // Close statement
            $stmt_insert_wallet->close();
        } else {
            echo "Please select a currency.";
        }
    } else {
        echo "You already own the maximum allowed wallets.";
    }
}