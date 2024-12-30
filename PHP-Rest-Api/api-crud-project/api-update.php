<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: post');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');


$data = json_decode(file_get_contents("php://input"), true);

$id = $data['sid'];
$sname = $data['sname'];
$sage = $data['sage'];
$scity = $data['scity'];



include("config.php");


$sql = "UPDATE `users` SET `student_name`='$sname',`age`=$sage,`city`='$scity' WHERE id = $id";


if (mysqli_query($conn, $sql)) {

    echo json_encode(array("message" => "Student Record Update", "status" => true));

} else {
    echo json_encode(array("message" => "Student Record Not Update", "status" => false));

}



?>
