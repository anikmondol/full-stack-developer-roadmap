<?php

if (isset($_REQUEST["Update"])) {
   
    $conn = mysqli_connect("localhost", "root", "", "php_crud") or die("Connection failed: " . mysqli_connect_error());

    $sid = $_REQUEST['sid'];
    $sname = $_REQUEST['sname'];
    $saddress = $_REQUEST['saddress'];
    $sclass = $_REQUEST['sclass'];
    $sphone = $_REQUEST['sphone'];

    $sql = "UPDATE `students`  SET `sname` = '$sname', `saddress` = '$saddress', `sclass` = $sclass, `sphone` = '$sphone'  WHERE `sid` = $sid";


    $result = mysqli_query($conn, $sql);

   if ($result) {
        header("Location: index.php");
    } else {
        echo "Query unsuccessful: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
