<?php

$numbers = array(11, 20, 74, 55, 65);

$new = array_fill_keys($numbers, "test");
// $new = array_fill(0, 3, "test");


echo "<pre>";
print_r($new);


?>