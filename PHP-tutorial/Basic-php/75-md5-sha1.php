<?php


$str = "hello";


// echo "md5 H : " . md5($str)  . "<br><br>";
// echo "md5 B : " . md5($str, true)  . "<br><br>";

// echo "sha1 H : " . sha1($str)  . "<br><br>";
// echo "sha1 B : " . sha1($str, true)  . "<br><br>";


if (sha1($str) === "aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d") {
    echo "ok";
}
 

?>