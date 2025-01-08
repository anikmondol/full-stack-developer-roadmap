<?php

session_start();

require "../../config/database.php";


if (isset($_REQUEST['submit'])) {


    $flag = false;

    $book_title = trim($_REQUEST['book_title']);
    $ISBN_Number = trim($_REQUEST['ISBN_Number']);
    $author_name = trim($_REQUEST['author_name']);
    $publication_year = trim($_REQUEST['publication_year']);
    $category_id = trim($_REQUEST['category_id']);




    if (!$book_title) {
        $_SESSION["book_title_error"] = "Book Title Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }


    if (!$ISBN_Number) {
        $_SESSION["ISBN_number_error"] = "ISBN Number Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }

    if (!$author_name) {
        $_SESSION["author_name_error"] = "Author Name Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }

    if (!$publication_year) {
        $_SESSION["publication_year_error"] = "Publication Year Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }

    if (!$category_id) {
        $_SESSION["category_error"] = "Category Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }


    if ($flag) {
        echo "error";
    } else {

        $createQuery = "INSERT INTO `books`(`title`, `author`, `publication_year`, `isbn`, `category_id`) VALUES ('$book_title','$author_name','$publication_year','$ISBN_Number','$category_id')";
        mysqli_query($conn, $createQuery);
        $_SESSION['insert'] = "Books Insert Successfully !!";
        header("location: books.php");
    }
}




if (isset($_REQUEST['deleteId'])) {

    $id = $_REQUEST['deleteId'];


    $sql = "DELETE FROM `books` WHERE id = $id";

    mysqli_query($conn, $sql);
    $_SESSION["delete"] = "Books Delete successfully!!!";
    header("location: books.php");
}


if (isset($_GET['status_id'])) {
    $status_id =  $_GET['status_id'];

    $select_query = "SELECT * FROM books WHERE id='$status_id'";
    $connect = mysqli_query($conn, $select_query);
    $education = mysqli_fetch_assoc($connect);

    if ($education['status'] == 'deactive') {
        $update_query = "UPDATE books SET status='active' WHERE id='$status_id'";
        mysqli_query($conn, $update_query);
        $_SESSION["active_status"] = "Books status active successfully !!!";
        header("location: books.php");
    } else {

        $update_query = "UPDATE books SET status='deactive' WHERE id='$status_id'";
        mysqli_query($conn, $update_query);
        $_SESSION["deactive_status"] = "Books status deactive successfully !!!";
        header("location: books.php");
    }
}



if (isset($_REQUEST['edit_btn']) && isset($_REQUEST['edit_id'])) {


    $flag = false;

    $book_title = trim($_REQUEST['book_title']);
    $ISBN_Number = trim($_REQUEST['ISBN_Number']);
    $author_name = trim($_REQUEST['author_name']);
    $publication_year = trim($_REQUEST['publication_year']);
    $category_id = trim($_REQUEST['category_id']);

    $id = $_REQUEST['edit_id'];



    if (!$book_title) {
        $flag = true;
    }


    if (!$ISBN_Number) {
        $flag = true;
    }

    if (!$author_name) {
        $flag = true;
    }

    if (!$publication_year) {
        $flag = true;
    }

    if (!$category_id) {
        $flag = true;
    }


    if ($flag) {
        $_SESSION["query_error"] = "Your Information doesn't match with our records !!!";
        header("location: books.php");
    } else {

        $createQuery = "UPDATE `books` SET `title`='$book_title',`author`='$author_name',`publication_year`='$publication_year',`isbn`='$publication_year',`category_id`='$category_id' WHERE id = $id";


        mysqli_query($conn, $createQuery);
        $_SESSION['update'] = "Data Update Successfully !!";
        header("location: books.php");
    }
}
