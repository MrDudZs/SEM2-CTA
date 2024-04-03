<nav class="top-nav">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="exchange.php">EXCHANGE</a></li>
        <li><a href="">RATES</a></li>
        <li><a href="">ABOUT</a></li>
        <li style="float:right"><a href="logout.php">
                <?php
                if (isset ($_SESSION['staff_id']) && isset ($_SESSION['email'])) {
                    // User is logged is
                    echo "Logged in as: " . $_SESSION['email'];
                } else {
                    
                    header("Location: login.php");
                    exit;
                } ?>
            </a></li>
    </ul>
</nav>