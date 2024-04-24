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
            <h2> Suspend User: </h2>
        </div>
        <div class="exchangereq-table">
            <div class="search-table">
                <h2><u>User <br> Management</u></h2>
                <form method="post">
                    <label for="email">User Email:</label>
                    <br>
                    <input type="email" id="email" name="email" placeholder="User email" required>
                    <br>
                    <button type="submit">Search</button>
                </form>
            </div>
            <div class="exchangereq-table">
                <?php
                include "php/sysadmin-processes/suspend-acc.php";
                ?>
            </div>
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