<?php

$a1 = ['a' => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$a2 = ['a' => "red", "f" => "blue", "d" => "gray",  "b" => "green"];
$a3 = ['a' => "red", "b" => "black", "h" => "yellow"];



// $new = array_flip($a1);

// $new = array_change_key_case($a1, CASE_LOWER);
$new = array_change_key_case($a1, CASE_UPPER);

print_r($new);


?>