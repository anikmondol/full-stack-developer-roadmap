<?php

if (isset($_REQUEST["delete"])) {
    
    include("config.php");

    $delete = $_REQUEST["delete"];

    
    $sql = "DELETE FROM `user` WHERE user_id = $delete";

    
    $result = mysqli_query($conn, $sql);

   if ($result) {
        header("Location: users.php");
    } else {
        echo "Query unsuccessful: " . mysqli_error($conn);
    }

    mysqli_close($conn);




}

?>