<?php


if (isset($_REQUEST["Save"])) {
   
    $conn = mysqli_connect("localhost", "root", "", "php_crud") or die("Connection failed: " . mysqli_connect_error());

    
    $sname = $_REQUEST['sname'];
    $saddress = $_REQUEST['saddress'];
    $sclass = $_REQUEST['sclass'];
    $sphone = $_REQUEST['sphone'];

   
    $sql = "INSERT INTO `students`(`sname`, `saddress`, `sclass`, `sphone`) 
            VALUES ('$sname', '$saddress', $sclass, '$sphone')";


    $result = mysqli_query($conn, $sql);

   if ($result) {
        header("Location: index.php");
    } else {
        echo "Query unsuccessful: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
