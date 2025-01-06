<?php

include 'config.php';


$sql = "SELECT * FROM `courses`";


$result = mysqli_query($conn, $sql) or die("query false");
$output = [];


if (mysqli_num_rows($result) > 0) {
  
  while ($row = mysqli_fetch_assoc($result)) {
  
    $output[] = $row;
    
  }

} else {
  $output = false;
}


mysqli_close($conn);


echo json_encode($output);


?>