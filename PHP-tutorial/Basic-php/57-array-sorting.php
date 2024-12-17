<?php

$numbers = array(11, 20, 74, 55, 65);
$a = ['a' => "red",  "c" => "blue","b" => "green", "d" => "yellow"];

// $new = array_reverse($numbers);

// sort($numbers);
// rsort($numbers);

// asort($a);
// arsort($a);
// ksort($a);
krsort($a);




echo "<pre>";

print_r($a);
// print_r($numbers);

?>