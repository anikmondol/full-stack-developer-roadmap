<?php

if (isset($_REQUEST['deleteid'])) {
   
    $conn = mysqli_connect("localhost", "root", "", "php_crud") or die("Connection failed: " . mysqli_connect_error());

    $deleteid = $_REQUEST['deleteid'];

    $sql = "DELETE FROM `students` WHERE sid = $deleteid";


    $result = mysqli_query($conn, $sql);

   if ($result) {

        header("Location: index.php");
    } else {
        echo "Query unsuccessful: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
