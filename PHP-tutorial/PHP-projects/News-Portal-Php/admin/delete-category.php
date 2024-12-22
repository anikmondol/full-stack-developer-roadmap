<?php

if (isset($_REQUEST["delete"])) {
    
    include("config.php");

    $delete = $_REQUEST["delete"];

    
    $sql = "DELETE FROM `category` WHERE category_id = $delete";

    
    $result = mysqli_query($conn, $sql);

   if ($result) {
        header("Location: users.php");
    } else {
        echo "<p style='color:red;text-align:center;margin:10px 0'>Username already exists. Please choose another.</p>";
    }

    mysqli_close($conn);

}

?>