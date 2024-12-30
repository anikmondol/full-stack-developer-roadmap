<?php

$conn = mysqli_connect("localhost", "root", "", "phptutorial") or die("connection failed" . mysqli_connect_error());


$sql = "SELECT * FROM `users`";

$result = mysqli_query($conn, $sql) or die("SQL Query Failed");

$output = "";

if (mysqli_num_rows($result) > 0) {

  $output .= "<table border='0' width='100%' cellpadding='10px' cellspacing='2'> <tr>
<th width='30px'></th>
<th width='60px'>Id</th>
<th>Name</th>
<th width='130px'>Age</th>
<th width='130px'>City</th>

</tr>";

  while ($row = mysqli_fetch_assoc($result)) {

    $output .= "<tr>
        <td> <input type='checkbox' value='{$row['id']}'> </td>
        <td >{$row['id']}</td>
        <td>{$row['student_name']}</td>
        <td >{$row['age']}</td>
        <td >{$row['city']}</td>

      </tr>";
  }


  $output .= "</table>";

  echo $output;
} else {

  echo "<h3>No Record Found</h3>";
}
