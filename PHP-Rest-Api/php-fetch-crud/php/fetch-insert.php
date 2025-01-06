<?php

include 'config.php';

$input = file_get_contents('php://input');
$decode = json_decode($input, true);

print_r($decode);

$firstName = $decode["fname"];
$lastName = $decode["lname"];
$class = $decode["class"];
$city = $decode["city"];




$sql = "INSERT INTO js_fetch(first_name, last_name,class, city) VALUES ('{$firstName}',
'{$lastName}','{$class}','{$city}')";

if(mysqli_query($conn,$sql)){
	echo json_encode(array('insert' => 'success'));
}else{
	echo json_encode(array('insert' => 'failed'));
}

?>