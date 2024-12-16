<?php

$ad = ["e" => "gray", "f" => "orange"];

$a1 = [$ad,'a' => "red", "b" => "green", "c" => "blue", "d" => "yellow"];

// array_walk($a1, "com", "is color");
array_walk_recursive($a1, "com", "color of");

function com($a, $b, $c){
    echo "$a $c " . strtoupper($b) . " <br>";
}



?>