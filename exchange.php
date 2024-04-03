<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EXCHANGE</title>

    <link rel="stylesheet" type="text/css" href="css/mobile.css" />

    <link rel="stylesheet" type="text/css" media="only screen and (min-width:601px)" href="css/desktop.css" />
    <script src="js/flagapi.js"></script>
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
            include "php/includes/nav.php";
            ?>
        </div>
        <div class="exchange-cont-mn">
            <main>
                <div class="exchange-cent-mn">
                    <h2>EXCHANGE</h2>
                </div>
                <div class="exchange-cont-mn">
                    <h3>Transfer From:</h3>

                    <div class="converter">
                        <label for="amount">Enter Amount: <span style="color: red;">*</label>
                        <select id="from-currency">
                            <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="JPY">JPY</option>
                            <!-- Add more currency options as needed -->
                        </select>
                        <br>
                        <input type="number" id="input-amount" placeholder="Enter amount" name="Finput">
                    </div>
                    <div class="converter">
                        <h3>Transfer To:</h3>
                        <label for="amount">Enter Amount: <span style="color: red;">*</label>
                        <select id="to-currency">
                            <option value="USD">USD</option>
                            <option value="EUR">EUR</option>
                            <option value="GBP">GBP</option>
                            <option value="JPY">JPY</option>
                            <!-- Add more currency options as needed -->
                        </select>
                        <div class="result-cont" id="result"></div>
                        <br>
                        <button id="convert-btn">Convert</button>
                    </div>
                </div>
        </div>
    </div>
    </main>
    </div>
    <div class="footer-container-mn">
        <?php
        include "php/includes/footer.php";
        ?>
    </div>
    </div>
    <script src="js/transferapi.js"></script>
</body>

</html>