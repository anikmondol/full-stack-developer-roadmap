<?php

// Get and validate the IDs
$id = $_REQUEST["id"];

// Ensure $id is an array
if (!is_array($id)) {
    $id = [$id]; // Convert single value to an array
}

// Sanitize the IDs by ensuring all values are integers
$id = array_map('intval', $id);

// Convert the sanitized array to a comma-separated string
$str = implode(",", $id);

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("Connection failed: " . mysqli_connect_error());

// Prepare the SQL query with the sanitized input
$sql = "DELETE FROM `users` WHERE id IN ({$str})";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo 1; // Success
} else {
    echo 0; // Failure
}

// Close the connection
mysqli_close($conn);
