<?php

$f_name = $_REQUEST["f_name"];
$l_name = $_REQUEST["l_name"];


$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed");


$sql = "INSERT INTO `users`(`first_name`, `last_name`) VALUES ('$f_name','$l_name')";

// $result = mysqli_query($conn, $sql);


if ( mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}




?>