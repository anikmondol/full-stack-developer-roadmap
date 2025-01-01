<?php

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("Connection failed");

if (isset($_REQUEST['range1']) && isset($_REQUEST['range1'])) {

  $min = $_REQUEST['range1'];
  $max = $_REQUEST['range2'];

  $sql = "SELECT * FROM `users` WHERE age between $min and $max";



 
} else {
  $min = "";
  $max = "";

  $sql = "SELECT * FROM `users` order by id asc";

}


$result = mysqli_query($conn, $sql) or die("query failed");

$output = "";

if (mysqli_num_rows($result) > 0) {

  while ($row = mysqli_fetch_assoc($result)) {
   
    $output .= "<tr>
    
    <td>{$row['id']}</td>
    <td>{$row['student_name']}</td>
    <td>{$row['age']}</td>
    <td>{$row['city']}</td>
    
    </tr>";

  }

  echo $output;

  
} else {
  echo "<h4>No Record found</h4>";
  exit();
}





?>
