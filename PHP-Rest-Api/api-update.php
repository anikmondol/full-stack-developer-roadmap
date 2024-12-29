<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: post');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');


$data = json_decode(file_get_contents("php://input"), true);

$student_id = $data['student_id'];
$student_name = $data['student_name'];
$student_age = $data['student_age'];
$student_city = $data['student_city'];



include("config.php");


$sql = "UPDATE `users` SET `student_name`='$student_name',`age`=$student_age,`city`='$student_city' WHERE id = $student_id";


if (mysqli_query($conn, $sql)) {

    echo json_encode(array("message" => "Student Record Update", "status" => true));

} else {
    echo json_encode(array("message" => "Student Record Not Update", "status" => false));

}



?>
