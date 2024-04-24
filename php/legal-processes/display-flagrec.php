<?php
 include 'php/config.php';
 if ($conn->connect_error) {
     die ("Connection failed: " . $conn->connect_error);
 }

$query = "SELECT COUNT(doc_id) FROM request_flagged";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_array($result);
echo "<h1>$row[0]</h1>";