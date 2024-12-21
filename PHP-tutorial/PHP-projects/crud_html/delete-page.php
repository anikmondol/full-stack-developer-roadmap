<?php

if (isset($_REQUEST["deletebtn"])) {
  
    $conn = mysqli_connect("localhost", "root", "", "php_crud") or die("Connection failed: " . mysqli_connect_error());

    $sid = $_REQUEST['sid'];

    $sql = "DELETE FROM `students` WHERE sid = $sid";


    $result = mysqli_query($conn, $sql);

   if ($result) {

        header("Location: index.php");
    } else {
        echo "Query unsuccessful: " . mysqli_error($conn);
    }

    mysqli_close($conn);

}


?>