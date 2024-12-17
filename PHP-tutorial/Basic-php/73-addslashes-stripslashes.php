<?php

$a = "hello anik";

echo $a . "<br>";

// $b = addslashes($a);
// echo $b . "<br>";
// echo stripslashes($b);


$b = addcslashes($a, "a");
echo $b . "<br>";
echo stripslashes($b);


?>