<?php
  $conn = mysqli_connect("localhost","root","","phptutorial") or die("Connection failed");

  if(isset($_POST['date1']) && isset($_POST['date2'])){
    $min = date("Y-m-d", strtotime($_POST['date1']));
    $max = date("Y-m-d", strtotime($_POST['date2']));
    
    $sql = "SELECT * FROM students WHERE birth_date BETWEEN '{$min}' AND '{$max}'";



  }else{
    $sql = "SELECT * FROM students ORDER BY id asc";
  }

  $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
  $output = "";

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
      $dob = date('d M, Y',strtotime($row['birth_date']));
      $output .= "<tr>
                    <td align='center'>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['city']}</td>
                    <td>{$dob}</td>
                  </tr>";
    }
    echo $output;
  }else{
    echo "<h2>No Record Found.</h2>";
  }

?>
