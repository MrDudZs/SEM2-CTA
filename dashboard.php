<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script></script>
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
            session_start();
            if (isset ($_SESSION['user_id']) && isset ($_SESSION['email'])) {
                include "php/includes/usernav.php";
            } else {
                // User is not logged in, display normal nav bar
                include "php/includes/nav.php";
                exit;
            }

            ?>
        </div>
        <div class="dashboard-cont-mn">
            <main class="dashboard-row">
                <div class="dash-leftcont-mn" style="background-color: #CECECE;">
                    <div class="dash-card">
                        <h3>USER ID:
                            <?php
                            if (isset ($_SESSION['user_id']) && isset ($_SESSION['email'])) {
                                // User is logged is
                                echo $_SESSION['user_id'];
                            } ?>
                        </h3>
                        <p style="color: red;">
                            Please make note of this! you will need this to login!
                        </p>
                    </div>
                </div>
                <div class="dash-right-mn">
                    <?php
                    include "php/includes/dashwalletview.php";
                    ?>
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

</html>


<!-- TO DO:
Creat a way to show audit logs

Create link to wallet.php

Give user a way to view their details and update