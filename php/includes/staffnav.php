<nav class="top-nav">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="php/processes/dashboard.php">DASHBOARD</a></li>
        <li style="float:right"><a href="logout.php">
                <?php

                if (isset($_SESSION['username'])) {
                    echo "Logged in: " . $_SESSION['username'];
                } else {
                    echo "Login";
                }
                ?>
            </a></li>
    </ul>
</nav>