<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE USERS</title>
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
                <h2>Create User:</h2>
                <div class="loginForm">
                    <form action="php/sysadmin-processes/staff-register-process.php" method="post">

                        <input class="input" type="email" name="email" placeholder="Email" required>
                        <br>
                        <input class="input" type="text" name="first_name" placeholder="First name" required>
                        <br>
                        <input class="input" type="text" name="surname" placeholder="Surname" required>
                        <br>
                        <input class="input" type="date" name="dob" required>
                        <br>
                        <input class="input" type="password" name="password" placeholder="Password" required>
                        <br>
                        <select class="input" name="permission_id" required>
                            <option value="">Select Permission</option>
                            <?php
                            include "php/config.php";

                            // Fetch permissions from the database
                            $sql = "SELECT permission_id, permission_name FROM permissions_staff";
                            $result = $conn->query($sql);

                            // Loop through each row of permissions and create options for dropdown
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['permission_id'] . "'>" . $row['permission_name'] . "</option>";
                                }
                            }
                            ?>
                        </select>
                        <br>
                        <select class="input" name="department_id" required>
                            <option value="">Select Permission</option>
                            <?php
                            include "php/config.php";

                            // Fetch permissions from the database
                            $sql = "SELECT department_id, department_name FROM departments";
                            $result = $conn->query($sql);

                            // Loop through each row of permissions and create options for dropdown
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['department_id'] . "'>" . $row['department_name'] . "</option>";
                                }
                            }
                            ?>
                        </select>
                        <br>
                        <br>
                        <input class="button" type="submit" value="Register">
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