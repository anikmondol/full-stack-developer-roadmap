<?php


$a1 = ['a' => "red", "b" => "green", "c" => "blue", "d" => "yellow", "f" => "red"];
$a2 = ['a' => "red", "f" => "blue", "d" => "gray",  "b" => "green"];
$a3 = ['a' => "red", "b" => "black", "h" => "yellow"];

$unique = array_unique($a1);
$value = array_values($a1);

// print_r($value);
print_r($unique);


?>