<?php

$id = $_REQUEST['id'];
$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];


$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed");


$sql = "UPDATE `users` SET `first_name`='$fname',`last_name`='$lname' WHERE id = $id";

$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {

    echo 1;
   
} else {

   echo 0;
}