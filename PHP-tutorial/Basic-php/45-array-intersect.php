<?php

$a1 = ['a' => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$a2 = ['a' => "red", "f" => "blue", "d" => "gray",  "b" => "green"];
// $a3 = ['a' => "red", "b" => "black", "h" => "yellow"];


function com($a, $b){
    if ($a === $b) {
        return 0;
    }

    return ($a > $b) ? 1 : -1;
}


// $new =  array_intersect($a1, $a2);
// $new =  array_intersect_key($a1, $a2);
// $new =  array_intersect_assoc($a2, $a1);
// $new =  array_intersect_uassoc($a1, $a2, "com");
// $new = array_intersect_uassoc($a1, $a2, "strcasecmp");
$new =  array_uintersect_assoc($a1, $a2, "com");



print_r($new);

?>