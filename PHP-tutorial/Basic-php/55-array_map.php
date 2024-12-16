<?php

// function dd($a, $b){
//     // return "$b : $a";
//     return [$b => $a];
// }

function dd($a){
   return strtoupper($a);
}

$numbers = array(11, 20, 74, 55, 65);
$numbers1 = array("a", "b", "c", "d", "e");
$a1 = ['a' => "red", "b" => "green", "c" => "blue", "d" => "yellow"];

// $new = array_map("dd",$numbers,$numbers1);
$new = array_map("dd",$a1);

echo "<pre>";
print_r($new);


?>