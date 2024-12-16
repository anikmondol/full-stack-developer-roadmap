<?php


// $a = array(10, 20, 30, 40);
// $b = array(50, 60, 70);
// $c = array(80, 90);


// $a = array( 'a' => 10, 'b' => 20, 'c' => 30, 'e' => 40);
// $b = array( 'f' => 50, 'g' => 60);
// $c = array(80, 90);

// $new = array_merge($a, $b, $c);

// print_r($new);



// $a = array( 'a' => 10, 'b' => 20, 'c' => 30, 'e' => 40);
// $b = array( 'b' => 50, 'g' => 60);


// $new = array_merge_recursive($a, $b);

// echo "<pre>";
// print_r($new);



$a = array(10, 20, 30);
$b = array(50, 60, 70);
$c = array(80, 90);

$new = array_combine($a, $b);

print_r($new);



?>