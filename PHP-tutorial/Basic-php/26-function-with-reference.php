<?php

function first($number){
     $number += 5;
}

function second(&$number){
    $number += 5;
}


$number = 10;

first($number);
echo "the value of $number <br>";

second($number);
echo "the value of $number";


?>