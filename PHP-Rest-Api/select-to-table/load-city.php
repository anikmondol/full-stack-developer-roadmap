<?php

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed" . mysqli_connect_error());


$sql = "SELECT distinct(city) FROM `users`";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed");



if (mysqli_num_rows($result) > 0) {


    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($output);




} else {

    echo "<h3>No Record Found</h3>";
}
