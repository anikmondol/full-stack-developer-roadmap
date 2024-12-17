<?php

$str = "Hello world";

$e = convert_uuencode($str);


echo $e . "<br>";

echo convert_uudecode($e);


?>