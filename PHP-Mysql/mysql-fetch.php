<?php

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed");


$sql = "SELECT * FROM `students`";

$result = mysqli_query($conn, $sql);

// $row = mysqli_fetch_assoc($result);
// $row = mysqli_fetch_row($result);
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
// $row = mysqli_fetch_array($result, MYSQLI_NUM);
// $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
$row = mysqli_fetch_field($result);

// -------------------------
echo "<pre>";

print_r($row);

// echo $row["name"];

// while ($row = mysqli_fetch_assoc($result)) {
//     echo $row['name'];
// }


// -------------------------
// echo "<pre>";

// print_r($row);

// echo $row[1];


// while ($row = mysqli_fetch_row($result)) {
//     echo $row[1] . "<br>";
// }


// -------------------------
// echo "<pre>";

// print_r($row);

// echo $row[1];


// while ($row = mysqli_fetch_row($result)) {
//     echo $row[1] . "<br>";
// }

// -------------------

// foreach ($row as $key => $values) {
//     foreach ($values as $key => $value) {
//         echo $value . "<br>";
//         if ($key == "course") {
//             echo "end inner foreach loop <br>";
//         }
//     }
// }


?>