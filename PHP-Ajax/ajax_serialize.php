<?php

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed");


$name = $_REQUEST["fullname"];
$age = $_REQUEST["age"];
$gender = $_REQUEST["gender"];
$country = $_REQUEST["country"];


$sql = "INSERT INTO `ajax_serialize`(`name`, `age`, `gendar`, `country`) VALUES ('$name','$age','$gender','$country')";



if (mysqli_query($conn, $sql)) {

    echo "Hello {$name} data added";

    mysqli_close($conn);

} else {

    echo "<h2>no date found</h2>";
}
