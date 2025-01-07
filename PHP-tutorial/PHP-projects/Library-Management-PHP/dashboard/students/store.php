<?php

session_start();

require "../../config/database.php";


if (isset($_REQUEST['submit'])) {

    $flag = false;

    $name = trim($_REQUEST['name']);
    $email = trim($_REQUEST['email']);
    $phone = trim($_REQUEST['phone']);
    $address = trim($_REQUEST['address']);




    if (!$name) {
        $_SESSION["name_error"] = "Name Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }


    // email regex 
    $email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

    if (!$email) {
        $_SESSION["email_error"] = "Email Field is Required!!!";
        $flag = true;
        header("location: create.php");
    } elseif (!preg_match($email_regex, $email)) {
        $_SESSION["email_error"] = "Invalid email provide!!!";
        $flag = true;
        header("location: create.php");
    }


    if (!$phone) {
        $_SESSION["phone_error"] = "Phone Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }

    if (!$address) {
        $_SESSION["address_error"] = "Address Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }



    $email_query = "SELECT COUNT(*) AS result FROM `students` WHERE email='$email'";
    $connect = mysqli_query($conn, $email_query);
    $result = mysqli_fetch_assoc($connect)['result'];


    if ($flag) {
        echo "error";
    } else {

        if ($result > 0) {
            $_SESSION['duplicate'] = "Email is duplicate !!";
            header("location: create.php");
        } else {
            $createQuery = "INSERT INTO `students`(`name`, `email`, `phone`, `address`) VALUES ('$name','$email','$phone','$address')";
            mysqli_query($conn, $createQuery);
            $_SESSION['register_success'] = "Registration Complete !!";
            header("location: students.php");
        }
    }
}




if (isset($_REQUEST['deleteId'])) {

    $id = $_REQUEST['deleteId'];


    $sql = "DELETE FROM `students` WHERE id = $id";

    mysqli_query($conn, $sql);
    $_SESSION["delete"] = "Students Delete successfully!!!";
    header("location: students.php");
}


if (isset($_GET['status_id'])) {
    $status_id =  $_GET['status_id'];

    $select_query = "SELECT * FROM students WHERE id='$status_id'";
    $connect = mysqli_query($conn, $select_query);
    $education = mysqli_fetch_assoc($connect);

    if ($education['status'] == 'deactive') {
        $update_query = "UPDATE students SET status='active' WHERE id='$status_id'";
        mysqli_query($conn, $update_query);
        $_SESSION["active_status"] = "Students status active successfully !!!";
        header("location: students.php");
    } else {

        $update_query = "UPDATE students SET status='deactive' WHERE id='$status_id'";
        mysqli_query($conn, $update_query);
        $_SESSION["deactive_status"] = "Students status deactive successfully !!!";
        header("location: students.php");
    }
}



if (isset($_REQUEST['edit_btn']) && isset($_REQUEST['edit_id'])) {



    $flag = false;

    $name = trim($_REQUEST['name']);
    $email = trim($_REQUEST['email']);
    $phone = trim($_REQUEST['phone']);
    $address = trim($_REQUEST['address']);

    $id = $_REQUEST['edit_id'];


    if (!$name) {
        $flag = true;
    }


    // email regex 
    $email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

    if (!$email) {
        $flag = true;
    } elseif (!preg_match($email_regex, $email)) {
        $flag = true;
    }


    if (!$phone) {
        $flag = true;
    }

    if (!$address) {
        $flag = true;
    }



    $email_query = "SELECT COUNT(*) AS result FROM `students` WHERE email='$email' And id != $id";
    $connect = mysqli_query($conn, $email_query);
    $result = mysqli_fetch_assoc($connect)['result'];



    if ($flag) {
        $_SESSION["query_error"] = "Your Information doesn't match with our records !!!";
        header("location: projects.php");
    } else {

        if ($result > 0) {
            $_SESSION['duplicate'] = "Email is Duplicate !!";
            header("location: students.php");
        } else {
            $createQuery = "UPDATE `students` SET `name`='$name',`email`='$email',`phone`='$phone',`address`='$address' WHERE id = $id";
            mysqli_query($conn, $createQuery);
            $_SESSION['update'] = "Data Update Successfully !!";
            header("location: students.php");
        }
    }
}
