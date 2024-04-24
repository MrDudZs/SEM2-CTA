<?php
session_start();
include 'php/config.php';

// Fetch currencies the user has wallets for
$user_id = $_SESSION['user_id'];
$sql = "SELECT c.currency_name FROM wallet AS w
        INNER JOIN currency AS c ON w.currency_id = c.currency_id
        WHERE w.user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

$currencies = array();
while ($row = $result->fetch_assoc()) {
    $currencies[] = $row['currency_name'];
}
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EXCHANGE</title>

    <link rel="stylesheet" type="text/css" href="css/mobile.css" />

    <link rel="stylesheet" type="text/css" media="only screen and (min-width:601px)" href="css/desktop.css" />
</head>

<body>
    <div class="container-mn mob-container">
        <div class="desk-header mob-header">
            <?php
            include "php/includes/header.php";
            ?>
        </div>
        <div class="nav-container">

            <?php
            if (isset($_SESSION['user_id']) && isset($_SESSION['email'])) {
                include "php/includes/usernav.php";
            } else {
                // User is not logged in, display normal nav bar
                include "php/includes/nav.php";
                exit;
            }

            ?>
        </div>
        <div class="exchange-cont-mn">
            <main>
                <div class="exchange-cent-mn">
                    <h2>EXCHANGE</h2>
                </div>
                <div class="exchange-cent-mn">
                    <form action="php/processes/transfer.php" method="post" enctype="multipart/form-data">
                        <h3>Transfer From:</h3>
                        <div class="converter">
                            <label for="amount">Enter Amount: <span style="color: red;">*</span></label>
                            <select id="from-currency" name="fromCurrency">
                            </select>
                            <br>
                            <input type="number" id="input-amount" placeholder="Enter amount" name="transferAmount"
                                required>
                        </div>
                        <div class="converter">
                            <h3>Transfer To:</h3>
                            <select id="to-currency" name="toCurrency">

                            </select>
                            <input class="result-cont" type="text" name="amount_to" id="result">
                            <br>
                            <div id="upload-section" style="display: none;">
                                <form class="docup-form" action="upload.php" method="post"
                                    enctype="multipart/form-data">
                                    <input type="file" id="result" name="file">
                                </form>
                            </div>
                            <br>
                            <button type="button" id="convert-btn">Convert</button>
                            <br>
                            <input type="submit" value="Transfer" id="transfer-btn" style="display: none">
                    </form>
                </div>
        </div>
        </main>
    </div>

    </div>
    </main>
    </div>
    <?php

    ?>
    </div>
    <script src="js/transferapi.js"></script>
    <?php
    include "php/includes/exchange-js.php";
    ?>
</body>

</html>

<!-- TO DO:

Add:
Limitation of how much can be convereted over x = 1,000,000.00 and under y = 50.00

User to upload proof of funds over x = 2,500.00

Way to read the users wallets and what currency id is being exchanged to
if the user doesn't have the wallet promt user to create wallet.
if the user doesn't have enough funds in wallet X to transfer to wallet Y display error

Styling of the exchange inlcuding making a box around the exchange