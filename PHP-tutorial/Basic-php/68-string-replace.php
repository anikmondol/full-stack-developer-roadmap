<?php
$str = "hello world. the world is nice";



// echo str_replace("hello", "hi", $str);
// echo str_ireplace("Hello", "hi", $str);
// echo substr_replace($str, "anik", 6, 6);
echo strtr($str, "e", "a");


?>