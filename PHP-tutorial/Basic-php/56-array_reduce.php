<?php

function myFunction($a, $b){

    // return "$a-$b";
    // return $a + $b;
    return $a * $b;

}


$a = ['a' => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$numbers = array(11, 20);

$new = array_reduce($numbers, "myFunction", 1);


print_r($new);



?>