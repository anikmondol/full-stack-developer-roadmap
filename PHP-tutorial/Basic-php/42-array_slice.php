<?php

// $a = array(10, 20, 30, 40);
$a = [ 'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];




// $new = array_slice($a, 1, 2);
$new = array_slice($a, 1, 2, true);




print_r($new);


?>