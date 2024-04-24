<?php
include 'php/config.php';

// Fetch main wallet details for the user
$user_id = $_SESSION['user_id'];

$sql = "SELECT w.wallet_id, w.is_main, c.currency_name, w.balance 
        FROM wallet AS w 
        INNER JOIN currency AS c ON w.currency_id = c.currency_id 
        WHERE w.user_id = $user_id AND w.is_main = 3";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // Main wallet found, fetch wallet details
    $row = $result->fetch_assoc();
    $currency_name = $row['currency_name'];
    $balance = $row['balance'];
    $wallet_name = $row['wallet_id'];
    // Display main wallet
    echo "<h3>Third Wallet</h3>";
    echo "<p>Wallet ID: {$row['wallet_id']}</p>";
    echo "<p>Currency: $currency_name</p>";
    echo "<p>Balance: $balance</p>";

} else if ($result->num_rows == 3) {
    if ($row = ['w.is_main = 3']){
        echo "123";
    };
}
