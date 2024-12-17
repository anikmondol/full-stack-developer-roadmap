<?php

$str = "hello user of Anik";

$array = explode(" ", $str);
// $array = explode(" ", $str, 3);

// print_r($array);

// $s = implode(" ", $array);
$s = join(" ", $array);

echo $s;


?>