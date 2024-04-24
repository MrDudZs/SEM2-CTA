<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <script></script>
    <link rel="stylesheet" type="text/css" href="css/mobile.css" />
    <link rel="stylesheet" type="text/css" media="only screen and (min-width:601px)" href="css/desktop.css" />
</head>

<?php
session_start();
?>

<body>
    <div class="container-mn">

        <div class="header-container">
            <div class="header-content">
                <?php
                include "php/includes/header.php";
                ?>
            </div>
        </div>
        <div class="nav-container">
            <div class="nav-content">
                <?php
                if (isset($_SESSION['staff_id'])) {
                    include "php/includes/staffnav.php";
                }
                ?>
            </div>
        </div>

        <div class="admin-display">
            <h2> Welcome: </h2>
        </div>
        <div class="admin-content">
            <div class="admin-content-main">
                <div class="admin-card">
                    <h2><u>View Your <br> Information</u></h2>
                    <form action="view-userinfo.php">
                        <input class="input-btn" type="submit" value="Settings">
                    </form>
                </div>
                <div class="admin-card">
                    <h2><u>Transfer<br>Rates</u></h2>
                    <form action="view-flaggedacc.php">
                        <input class="input-btn" type="submit" value="Settings">
                    </form>
                </div>
            </div>
            <div class="admin-container-users">
                <div class="admin-card">
                    <h2><u>Request <br> Flagged</u></h2>
                    <?php
                    include "php/legal-processes/display-flagrec.php";
                    ?>
                    <form action="view-flaggedacc.php">
                        <input class="input-btn" type="submit" value="Review Flagged Users">
                    </form>
                </div>
                <div class="admin-card">
                    <h2><u>Create <br> Staff</u></h2>
                    <form action="staff-register.php">
                        <input class="input-btn" type="submit" value="Create Staff Account">
                    </form>
                </div>
                <div class="admin-card">
                    <h2><u>Susspend <br> Account</u></h2>
                    <form action="suspend-acc-page.php">
                        <input class="input-btn" type="submit" value="Suspend Users">
                        </from>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <div class="footer-content">
                <?php
                include "php/includes/footer.php";
                ?>
            </div>
        </div>
    </div>
</body>

</html>