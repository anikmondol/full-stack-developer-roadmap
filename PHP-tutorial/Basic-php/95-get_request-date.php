<?php

echo "<pre>";
print_r($_REQUEST);

// echo $_REQUEST['name'];


echo "<pre>";
print_r($_SERVER);

echo $_SERVER["HTTP_ORIGIN"] . "<br>";
echo $_SERVER["REQUEST_METHOD"] . "<br>";

?>