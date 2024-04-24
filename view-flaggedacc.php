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
<style>

</style>

<body>
    <div class="container-mn">

        <div class="header-container">
            <div class="header-content">
                <?php
                include "php/includes/header.php"
                    ?>
            </div>
        </div>
        <div class="nav-container">
            <div class="nav-content">
                <?php
                include "php/includes/staffnav.php"
                    ?>
            </div>
        </div>

        <div class="admin-container-mn">
            <div class="admin-content-mn">
                <h1>Welcome:</h1>
            </div>
            <div class="top-menu-mn">

            </div>
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
                    include "php/processes/view-flaggedacc.php";
                    ?>
                </table>
            </div>
        </main>
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