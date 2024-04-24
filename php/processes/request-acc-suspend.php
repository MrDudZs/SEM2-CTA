<?php

session_start();

include 'php/config.php'; // Connect to database


if ($conn->connect_error) { // Connection to database failed
    die ("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['staffid'])) {
    $currentUserId = $_SESSION['staffid'];

    $sql = "SELECT e.doc_id, e.doc_name, e.upload_date, e.upload_time, e.uploaded_by
    FROM exchange_docs e
    INNER JOIN users u ON u.user_id = e.uploaded_by";
    $result = $conn->query($sql);

    if($result->num_rows > 0){ // Check files in table
        // Output data of each row
        if ($row = $result->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row["doc_id"] . "</td>";
            echo "<td>" . $row["doc_name"] . "</td>";
            echo "<td>" . $row["upload_date"] . "</td>";
            echo "<td>" . $row["upload_time"] . "</td>";
            echo "<td>" . $row["uploaded_by"] . "</td>";
            echo "</tr>";
        } else {
            echo "<tr><td colspan='5'>No files found.</td></tr>";
        }
    }
}