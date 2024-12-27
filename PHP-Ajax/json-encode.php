<?php

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed");


$sql = "SELECT * FROM `students`";

$result = mysqli_query($conn, $sql);

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($output);


mysqli_close($conn);

