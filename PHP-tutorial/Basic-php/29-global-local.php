<?php

$a = 10;
$b = 5;

function fun(){
    global $a, $b;
    $a += $a + $b;
    
}




fun($a, $b);


echo $a;



?>