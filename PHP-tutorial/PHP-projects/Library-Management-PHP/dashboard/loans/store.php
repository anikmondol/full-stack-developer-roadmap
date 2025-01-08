<?php

session_start();

require "../../config/database.php";


if (isset($_REQUEST['submit'])) {

    $flag = false;

    $student = trim($_REQUEST['student']);
    $book = trim($_REQUEST['book']);
    $loan_date = trim($_REQUEST['loan_date']);
    $return_date = trim($_REQUEST['return_date']);





    if (!$student) {
        $_SESSION["student_error"] = "Student Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }


    if (!$book) {
        $_SESSION["book_error"] = "Book Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }

    if (!$loan_date) {
        $_SESSION["loan_date_error"] = "Loan Date Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }

    if (!$return_date) {
        $_SESSION["return_date_error"] = "Return Date Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }


    if ($flag) {
        echo "error";
    } else {

        $createQuery = "INSERT INTO `books_loans`(`book_id`, `student_id`, `loan_date`, `return_date`) VALUES ('$book','$student','$loan_date','$return_date')";
        mysqli_query($conn, $createQuery);
        $_SESSION['insert'] = "Loan Insert Successfully !!";
        header("location: loans.php");
    }
}




if (isset($_REQUEST['deleteId'])) {

    $id = $_REQUEST['deleteId'];


    $sql = "DELETE FROM `books_loans` WHERE id = $id";

    mysqli_query($conn, $sql);
    $_SESSION["delete"] = "Loan Delete successfully!!!";
    header("location: loans.php");
}


if (isset($_GET['status_id'])) {
    $status_id =  $_GET['status_id'];

    $select_query = "SELECT * FROM books_loans WHERE id='$status_id'";
    $connect = mysqli_query($conn, $select_query);
    $education = mysqli_fetch_assoc($connect);

    if ($education['status'] == 'deactive') {
        $update_query = "UPDATE books_loans SET status='active' WHERE id='$status_id'";
        mysqli_query($conn, $update_query);
        $_SESSION["active_status"] = "Loan status active successfully !!!";
        header("location: loans.php");
    } else {

        $update_query = "UPDATE books_loans SET status='deactive' WHERE id='$status_id'";
        mysqli_query($conn, $update_query);
        $_SESSION["deactive_status"] = "Loan status deactive successfully !!!";
        header("location: loans.php");
    }
}





if (isset($_REQUEST['edit_btn']) && isset($_REQUEST['edit_id'])) {



    $flag = false;

    $student = trim($_REQUEST['student']);
    $book = trim($_REQUEST['book']);
    $loan_date = trim($_REQUEST['loan_date']);
    $return_date = trim($_REQUEST['return_date']);


    $id = $_REQUEST['edit_id'];





    if (!$student) {
        $flag = true;
    }


    if (!$book) {
        $flag = true;
    }

    if (!$loan_date) {
        $flag = true;
    }

    if (!$return_date) {
        $flag = true;
    }




    if ($flag) {
        $_SESSION["query_error"] = "Your Information doesn't match with our records !!!";
        header("location: loans.php");
    } else {

        $createQuery = "UPDATE `books_loans` SET `book_id`='$book',`student_id`='$student',`loan_date`='$loan_date',`return_date`='$return_date' WHERE id = $id";
        mysqli_query($conn, $createQuery);
        $_SESSION['update'] = "Data Update Successfully !!";
        header("location: loans.php");
    }
}
