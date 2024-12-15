<?php

// function name($name = "anik"){
//     return "hello $name <br>";
// }

// echo name("anik mondal");
// echo name("anik");


function sum($a, $b, $c)
{
    return $a + $b + $c;
}

function avr($total)
{
    echo  $total / 3 . "%";
}



$total = sum(10, 22, 45);

// echo $total;

avr($total);
