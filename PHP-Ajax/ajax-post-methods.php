<?php

$f_name = $_REQUEST["first-name"];
$l_name = $_REQUEST["last-name"];


$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed");


$sql = "INSERT INTO `users`(`first_name`, `last_name`) VALUES ('$f_name','$l_name')";

// $result = mysqli_query($conn, $sql);


if ( mysqli_query($conn, $sql)) {
    echo "hello {$f_name} added date";

    mysqli_close($conn);

} else {
    echo "sorry";
}

