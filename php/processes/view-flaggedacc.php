<?php

include 'php/config.php'; // Connect to database


if ($conn->connect_error) { // Connection to database failed
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) {
        if (isset($_POST['dismiss'])) {
            foreach ($_POST['dismiss'] as $docId) {
                $sql = "INSERT INTO exchange_request (doc_id, doc_name, upload_date, upload_time, uploaded_by, currency_from, currency_to, amount_from, amount_to) 
                    SELECT doc_id, doc_name, upload_date, upload_time, uploaded_by, currency_from, currency_to, amount_from, amount_to 
                    FROM request_flagged 
                    WHERE doc_id = $docId";

                $conn->query($sql);

                $sql = "DELETE FROM request_flagged WHERE doc_id = $docId";
                $conn->query($sql);
            }
        }

        if (isset($_POST['flag'])) {
            foreach ($_POST['flag'] as $docId)
                ;
            $sql = "INSERT INTO exchange_request  (doc_id, doc_name, upload_date, upload_time, uploaded_by, currency_from, currency_to, amount_from, amount_to) 
                            SELECT doc_id, doc_name, upload_date, upload_time, uploaded_by, currency_from, currency_to, amount_from, amount_to 
                            FROM request_flagged 
                            WHERE doc_id = $docId";
            $conn->query($sql);

            $sql = "DELETE FROM request_flagged WHERE doc_id = $docId";
            $conn->query($sql);
        }
    }
}

$sql = "SELECT r.doc_id, r.doc_name, r.upload_date, r.upload_time, r.uploaded_by, r.currency_from, r.currency_to, r.amount_from, r.amount_to
    FROM request_flagged r
    INNER JOIN users u ON u.user_id = r.uploaded_by";
$result = $conn->query($sql);

$result = $conn->query($sql);


if ($result->num_rows > 0) {     // Check if there are any files shared with the user
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<form method='post'>";
        echo "<tr>";
        echo "<td>" . $row["doc_id"] . "</td>";
        echo "<td class='scroll-text'>" . $row["doc_name"] . "</td>";
        echo "<td>" . $row["upload_date"] . "</td>";
        echo "<td>" . $row["upload_time"] . "</td>";
        echo "<td>" . $row["uploaded_by"] . "</td>";
        echo "<td>" . $row["currency_from"] . "</td>";
        echo "<td>" . $row["amount_from"] . "</td>";
        echo "<td>" . $row["currency_to"] . "</td>";
        echo "<td>" . $row["amount_to"] . "</td>";
        echo "<td><input type='checkbox' name='dismiss[]' value='" . $row["doc_id"] . "'></td>";
        echo "<td><input type='checkbox' name='flag[]' value='" . $row["doc_id"] . "'></td>";
        echo "<td><button type='submit' name='submit'>Submit</button></td>";
        echo "</tr>";
        echo "</form>";
    }
} else {
    echo "<tr><td colspan='4'>No shared files found.</td></tr>";
}
