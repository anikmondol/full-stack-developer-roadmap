<?php


$id = $_REQUEST["id"];

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed");


$sql = "DELETE FROM `users` WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}







?>