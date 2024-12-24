<?php

session_start();

if ($_SESSION["role"] == "0") {
    header("Location: post.php");
}

if (isset($_REQUEST["delete"])) {
    
    include("config.php");

    $delete = $_REQUEST["delete"];
    $cat_id = $_REQUEST["cat_id"];

    
    $sql = "DELETE FROM `post` WHERE post_id = {$delete};";
    $sql .= "UPDATE category SET post = post - 1 WHERE category_id = {$cat_id};";

    
    $result = mysqli_multi_query($conn, $sql);

   if ($result) {
        header("Location: post.php");
    } else {
        echo "<p style='color:red;text-align:center;margin:10px 0'>Sorry already Delete. Please choose another.</p>";
    }

    mysqli_close($conn);

}


?>