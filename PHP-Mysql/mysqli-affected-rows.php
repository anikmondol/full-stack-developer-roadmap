<?php

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed");

$sql = "SELECT * FROM `students` where id > 2";

$result = mysqli_query($conn, $sql);


$a = mysqli_affected_rows($conn);

echo $a;


?>