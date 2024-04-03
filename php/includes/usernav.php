<nav class="top-nav">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="exchange.php">EXCHANGE</a></li>
        <li><a href="">RATES</a></li>
        <li><a href="dashboard.php">DASHBOARD</a></li>
        <li style="float:right"><a href="logout.php">
                <?php
                if (isset ($_SESSION['user_id']) && isset ($_SESSION['email'])) {
                    // User is logged is
                    echo "Logged in as: " . $_SESSION['first_name'] . ' ' . $_SESSION['surname']; 
                } else {
                    
                    header("Location: login.php");
                    exit;
                } ?>
            </a></li>
    </ul>
</nav>