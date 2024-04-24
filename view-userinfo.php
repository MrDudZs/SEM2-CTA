<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <script></script>
    <link rel="stylesheet" type="text/css" href="css/mobile.css" />
    <link rel="stylesheet" type="text/css" media="only screen and (min-width:601px)" href="css/desktop.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
            <h2> Your Information: </h2>
        </div>
        <div class="admin-content-main">
            <div class="admin-card">
                <h2><u>Reset Password</u></h2>

            </div>
            <div class="admin-card">
                <h2><u>Change Details</u></h2>
                <?php
                include "php/processes/change-details-staff.php";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</body>

</html>