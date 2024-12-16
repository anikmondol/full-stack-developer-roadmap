<?php

$a = array(10, 20, 30, 40);
$b = array(50, 60, 70);
$c = array(80, 90);


// array_splice($a, 1, 2, $c);
// array_splice($a, 1, 2);
// array_splice($a, 1, -1);
array_splice($a, 1, count($a), $c);


print_r($a);


?>