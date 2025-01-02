<?php

include 'config.php';


$sql = "SELECT js_fetch.id, js_fetch.first_name, js_fetch.last_name, js_fetch.class, js_fetch.city, courses.course_name  FROM `js_fetch` left join courses on js_fetch.class = courses.course_id";


$result = mysqli_query($conn, $sql) or die("query false");
$output = [];


if (mysqli_num_rows($result) > 0) {
  
  while ($row = mysqli_fetch_assoc($result)) {
  
    $output[] = $row;
    
  }

} else {
  $output['empty'] = ['empty'];
}


mysqli_close($conn);


echo json_encode($output);


?>