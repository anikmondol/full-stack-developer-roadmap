<?php

// $a = [1, 2, 3, 4];

// $b = [5, 6];

// $c = [7, 8, 9, 10, 11];

// $newArray = array_replace($a, $b, $c);

// print_r($newArray);


// $a = [ 'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
// $a = [1, 2, 3, 4];

// $b = [ 'e' => 5, 'f' => 6];


// $newArray = array_replace($a, $b);

// echo "<pre>";

// print_r($newArray);

// echo "</pre>";


$a = [ ['a' => 1, 'b' => 2], ['c' => 3, 'd' => 4]];

$b = [[ 'e' => 5], 'f' => 6];

$newArray = array_replace_recursive($a, $b);

echo "<pre>";

print_r($newArray);

echo "</pre>";

?>