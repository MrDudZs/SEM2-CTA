<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wallet</title>
    <script></script>
    <link rel="stylesheet" type="text/css" href="css/mobile.css" />
    <link rel="stylesheet" type="text/css" media="only screen and (min-width:601px)" href="css/desktop.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            session_start();
            if (isset($_SESSION['user_id']) && isset($_SESSION['email'])) {
                include "php/includes/usernav.php";
            } else {
                // User is not logged in, display normal nav bar
                include "php/includes/nav.php";
                exit;
            }

            ?>
        </div>
        <div class="dashboard-cont-mn">
            <main>
                <div class="main-content-mn">

                    <div id="wallet1" class="wallet-card">
                        <?php
                        if ($is_main = 0) {
                            echo "<div class='display-none'>";

                            echo "</div>";
                        } else if ($is_main = 1) {
                            include "php/includes/dashwalletview.php";
                        }
                        ?>
                        <?php

                        ?>
                    </div>

                    <div class="">
                        <?php
                        if ($is_main = !2) {
                            echo "<div class='display-none'>";

                            echo "</div>";
                        } else if ($is_main = 2) {
                            echo "<div class='wallet-card'>";
                            include "php/includes/walletview.php";
                            echo "</div>";
                        }
                        ?>
                    </div>
                    <?php
                    if ($is_main = !3) {
                        echo "<div class='display-none'>";

                        echo "</div>";
                    } else if ($is_main = 3) {
                        echo "<div class='wallet-card'>";
                        include "php/includes/thirdwallet.php";
                        echo "</div>";
                    }
                    ?>
                    <!-- display new wallet -->
                    <div class="wallet-add">
                        <div class="add-wallet-form">
                            <h3>New Wallet:</h3>
                            <?php
                            include "php/includes/add-wallet-modal.php";
                            ?>
                        </div>
                    </div>
                    <div class="add-wallet-form">
                        <h3>Add Funds:</h3>
                        <?php
                        include "php/processes/add-funds-modal.php";
                        ?>
                    </div>
                </div>
            </main>
        </div>
        <div class="footer-container">
            <div class="footer-content">
                <?php
                include "php/includes/footer.php"
                    ?>
            </div>
        </div>
    </div>
</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</html>

<!-- TO DO
Display Main wallet like on dashboard

Ability to add more wallets to the user up to 3 wallets? maybe

Table TO DO
Create a transfer ID table and like to wallet table
Create Currency ID table and link to this table to store currency ID on wallet
Create Currency In and Currency Out to show how much in the most recent transfer has come in or out the account