<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['staff_id'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Read the logged-in user's permission ID
$permissionId = $_SESSION['permission_id'];

// Determine the appropriate dashboard based on permission ID
switch ($permissionId) {
    case 1:
        header("Location: ../../systemadmin.php");
        break;
    case 2:
        header("Location: ../../legaladmin.php");
        break;
    case 3:

        header("Location: ../../financeadmin.php");
        break;
    case 4:
        header("Location: ../../../login.php");
        break;
    default:
        // Redirect to a default page or show an error message
        header("Location: ../../index.php");
        break;
}

