<?php

if (isset($_REQUEST["submit"])) {

    include("config.php");


    if (empty($_FILES['new_image']['name'])) {

        $file_name = $_REQUEST["old_image"];

    
    } else {

        $sql1 = "select * from post WHERE post_id = {$_REQUEST['post_id']};";

        $ans = mysqli_query($conn, $sql1);
    
        $row = mysqli_fetch_assoc($ans);
    
    
       unlink("upload/".$row['post_img']);
    

        $errors = array();

        $file_name = $_FILES['new_image']['name'];
        $file_size = $_FILES['new_image']['size'];
        $file_tmp = $_FILES['new_image']['tmp_name'];
        $file_type = $_FILES['new_image']['type'];


        $parts = explode('.', $file_name);
        $file_ext = end($parts);




        $extensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
        }

        if ($file_size > 2097152) {
            $errors[] = "File size must be 2mb or lower.";
        }
        $new_name = time() . "-" . basename($file_name);
        $target = "upload/" . $new_name;

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, $target);
        } else {
            print_r($errors);
            die();
        }

    }


    session_start();


    $post_id = mysqli_real_escape_string($conn, $_REQUEST['post_id']);
    $title = mysqli_real_escape_string($conn, $_REQUEST['post_title']);
    $description = mysqli_real_escape_string($conn, $_REQUEST['postdesc']);
    $category = mysqli_real_escape_string($conn, $_REQUEST['category']);
    $date = date("d M, Y");
    $author = $_SESSION['user_id'];


    $sql = "UPDATE `post` SET `title`='$title',`description`='$description',`category`='$category',`post_date`='$date',`author`='$author',`post_img`='$new_name' WHERE post_id = $post_id;";

    if (mysqli_multi_query($conn, $sql)) {
        header("location: post.php");
    } else {
        echo "<div class='alert alert-danger'>Query Failed.</div>";
    }

    mysqli_close($conn);
}
