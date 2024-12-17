<?php

$a = 10;
$b = 20;

echo "a = $a <br>";
echo "b = $b <br>";

echo "--- <br>";

$array = [$a, $b];

list($b , $a) = $array;



echo "a = $a <br>";
echo "b = $b ";


?>