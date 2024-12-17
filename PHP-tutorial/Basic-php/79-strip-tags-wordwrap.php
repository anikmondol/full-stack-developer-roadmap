<?php

// $str = "hello <b>world</b> hello <i>earth</i>";

// echo strip_tags($str, "<b>");

$str = "hello anik how are you";

echo wordwrap($str, 4, "<br>", true);

?>