<?php

$numbers = array(11, 20, 74, 55, 65);


// $new = array_rand($numbers, 2);

// echo $numbers[$new];
// echo $numbers[$new];

// print_r($numbers[$new[0]]."<br>");
// print_r($numbers[$new[1]]);

shuffle($numbers);

echo "<pre>";
print_r($numbers);


?>