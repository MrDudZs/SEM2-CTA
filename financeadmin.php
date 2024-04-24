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
        <div class="admin-content-main">
            <div class="admin-card">
                <h2><u>View Your <br> Information</u></h2>
                <form action="view-userinfo.php">
                    <input class="input-btn" type="submit" value="Settings">
                </form>
            </div>
            <div class="admin-card">
                <h2><u>Transfer <br> Requests</u></h2>
                <form action="view-exchange.php">
                    <input class="input-btn" type="submit" value="Review Transfers">
                </form>
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

<!-- TO DO:
Ability to see transfer requests from users over 2,500.00 with their attached document for proof of funds

Refer user to legal admin team incase of suspisous activity

Check users transfer history

Display approved, rejected, pending, and under review transactions based off users

Ability to refer to legal team with a breif text of why the user is under review under user_notes


(
    Create table for transfers
    insert in to transfers is A,B,C,D
    A = Approved
    B = Rejected
    C = Pending
    D = Under review

    Create table for transaction history
    use table to create an audit of recent transactions
    (possible to make the transactions after ~30 a pdf download)

    Insert for tables: 
        Wallet:
            - currency_in
            - currency_out

        Transfer:
            - transfer_status (as above A,B,C,D of transfer status)

        Users:
            - under_review true or false (before user is suspsended make user under review)
            - user_notes
)