<?php


$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed". mysqli_connect_error());


$sql = "SELECT * FROM `students`";

$result = mysqli_query($conn, $sql);

// print_r(mysqli_error_list($conn));

// die;



if (mysqli_num_rows($result) > 0) {
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['name'] . "<br>";
    }


}


?>