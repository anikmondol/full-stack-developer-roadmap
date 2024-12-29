<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: Post');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');


$data = json_decode(file_get_contents("php://input"), true);

$student_name = $data['student_name'];
$student_age = $data['student_age'];
$student_city = $data['student_city'];



include("config.php");


$sql = "INSERT INTO `users`(`student_name`, `age`, `city`) VALUES ('$student_name', $student_age,'$student_city')";


if (mysqli_query($conn, $sql)) {

    echo json_encode(array("message" => "Student Record Inserted", "status" => true));

} else {
    echo json_encode(array("message" => "Student Record Not Inserted", "status" => false));

}



?>
