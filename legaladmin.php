<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
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
                    include "php/header.php"
                ?>
            </div>
        </div>
        <div class="nav-container">
            <div class="nav-content">
                <?php
                include "php/nav.php"
                    ?>
            </div>
        </div>

        <div class="admin-container-mn">
            <div class="admin-content-mn">
                <h1>Welcome: <?php $username?> </h1>
            </div>
        </div>

        <div class="footer-container">
            <div class="footer-content">
                <?php
                    include "php/footer.php"
                ?>
            </div>
        </div>
    </div>
</body>

</html>