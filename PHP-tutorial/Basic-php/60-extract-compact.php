<?php


$b = "gray";

$color = ['a' => "red", "c" => "blue", "b" => "green", "d" => "yellow"];

// Use extract with EXTR_SKIP
// extract($color, EXTR_SKIP);
// extract($color, EXTR_PREFIX_SAME, "test");
extract($color, EXTR_PREFIX_ALL, "test");

echo "value of a : $b <br>";
echo "value of a : $test_a <br>";
echo "value of b : $test_b <br>";
echo "value of c : $test_c <br>";






// $fName = "anik";
// $lName = "mondal";
// $city = "Dhaka";
// $gender = "male";
// $class = 12;

// $extra = ['gender', 'class'];

// $new = compact("fName", "lName", "city", $extra);

// print_r($new);
?>
