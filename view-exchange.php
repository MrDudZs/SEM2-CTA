<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exchange Requests</title>
    <script></script>
    <link rel="stylesheet" type="text/css" href="css/mobile.css" />
    <link rel="stylesheet" type="text/css" media="only screen and (min-width:601px)" href="css/desktop.css" />
</head>

<?php
session_start();
?>

<body onload="pageRefresh()">
    <div class="container-mn mob-container">
        <div class="desk-header mob-header">
            <?php
            include "php/includes/header.php";
            ?>
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
        <div class="exchangereq-cont-mn">
            <div class="admin-display">
                <h3>View Requests: </h3>
            </div>
            <div class="admin-options-display">
                <form action="financeadmin.php">
                    <input class="input-btn" type="submit" value="Return">
                </form>
                <input class="input-btn" type="submit" value="Refresh" onclick="location.reload();">
                <div class="input-btn" id="last-refresh"></div>
            </div>
            <main>
                <div class="search-main">
                    <table id="client-table">
                        <tr>
                            <th>Request ID:</th>
                            <th>Request Doc:</th>
                            <th>Request Date:</th>
                            <th>Request Time:</th>
                            <th>User ID:</th>
                            <th>Currency From: </th>
                            <th>Currency Amount: </th>
                            <th>Currency To: </th>
                            <th>Currency Amount: </th>
                            <th>Dismiss:</th>
                            <th>Flag:</th>
                            <th></th>
                        </tr>
                        <?php
                        include "php/processes/show-reqsall.php";
                        ?>
                    </table>
                </div>
            </main>
        </div>
    </div>
    <script src="js/page-refresh.js"> </script>
</body>

</html>