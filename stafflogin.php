<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/mobile.css" />
    <link rel="stylesheet" href="css/desktop.css" media="only screen and (min-width : 601px)" />
</head>

<body>
    <div class="container-mn">
        <div class="header-mn header-mb">
            <?php
            include "php/includes/header.php";
            ?>
        </div>

        <div class="nav-container">
            <div class="nav-content">
                <?php
                include "php/includes/nav.php"
                    ?>
            </div>
        </div>

        <div class="loginContainer">
            <div class="loginContent">
                <h2>Login:</h2>
                <div class="loginForm">
                    <form action="staffloginprocess.php" method="post">
                        <input class="input" type="email" name="email" placeholder="email" required>
                        <br>
                        <input class="input" type="text" name="staff_id" placeholder="ID"required>
                        <br>
                        <input class="input" type="password" name="password" placeholder="password" required> <br>
                        <br>
                        <input class="button" type="submit" value="Login">
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-container-mn">
            <?php
               // include 'php/includes/footer.php';
            ?>
        </div>
    </div>

</body>

</html>