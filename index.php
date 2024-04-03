<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
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
            if(isset($_SESSION['user_id']) && isset($_SESSION['email'])) {
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
            </main>
        </div>
        <div class="footer-container-mn">
            <?php
            include "php/includes/footer.php";
            ?>
        </div>
    </div>
</body>

</html>