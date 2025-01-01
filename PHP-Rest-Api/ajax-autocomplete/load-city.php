<?php

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed" . mysqli_connect_error());


$sql = "SELECT distinct(city) from users where city like '%{$_REQUEST['city']}%'";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed");

$output = "";

if (mysqli_num_rows($result) > 0) {


$output .= "<ul>";

while ($row = mysqli_fetch_assoc($result)) {
    $output .= "<li> {$row['city']} </li>";
}


} else {

    $output .= "<li style='list-style:none'> no data fond </li>";
}

$output .= "</ul>";

echo $output;
