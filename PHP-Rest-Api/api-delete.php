<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Request-With');


$data = json_decode(file_get_contents("php://input"), true);

$student_id = $data['sid'];

include("config.php");


$sql = "SELECT * FROM `users` where id = {$student_id}";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed");

if (mysqli_num_rows($result) > 0) {

    $sql1 = "DELETE FROM `users` WHERE id = $student_id";


    if (mysqli_query($conn, $sql1)) {

        echo json_encode(array("message" => "Student Record Deleted", "status" => true));
    } else {
        echo json_encode(array("message" => "Student Record Not Deleted", "status" => false));
    }


} else {
    echo json_encode(array("message" => "No Record Found", "status" => false));
}
