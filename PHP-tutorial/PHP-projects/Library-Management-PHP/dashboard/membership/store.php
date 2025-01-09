<?php

session_start();

require "../../config/database.php";


if (isset($_REQUEST['submit'])) {


    $flag = false;

    $title = trim($_REQUEST['title']);
    $amount = trim($_REQUEST['amount']);
    $duration = trim($_REQUEST['duration']);
    $money_status = trim($_REQUEST['money_status']);





    if (!$title) {
        $_SESSION["title_error"] = "title Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }


    if (!$amount) {
        $_SESSION["amount_error"] = "amount Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }

    if (!$duration) {
        $_SESSION["duration_error"] = "Membership Date Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }

    if (!$money_status) {
        $_SESSION["gender_error"] = "Money status Field is Required!!!";
        $flag = true;
        header("location: create.php");
    }


    $datetime = date("Y-m-d H:i:s");
    $start_date = date("Y-m-d");
    $end_date = date("Y-m-d");



    if ($flag) {
        echo "error";
    } else {



        ## start date - end date calculation
        $start_date = date("Y-m-d");
        $start_time = strtotime($start_date);
        $end_date = date("Y-m-d", strtotime("+$duration month", $start_time));


        $createQuery = "INSERT INTO `membership`(`title`, `payments_id`, `money_status`, `start_date`, `end_date`, `amount`) VALUES ('$title','$duration','$money_status','$start_date','$end_date','$amount')";
        mysqli_query($conn, $createQuery);
        $_SESSION['insert'] = "Loan Insert Successfully !!";
        header("location: membership.php");
    }
}




if (isset($_REQUEST['deleteId'])) {

    $id = $_REQUEST['deleteId'];


    $sql = "DELETE FROM `membership` WHERE id = $id";

    mysqli_query($conn, $sql);
    $_SESSION["delete"] = "Membership Delete successfully!!!";
    header("location: membership.php");
}


if (isset($_GET['status_id'])) {
    $status_id =  $_GET['status_id'];

    $select_query = "SELECT * FROM membership WHERE id='$status_id'";
    $connect = mysqli_query($conn, $select_query);
    $education = mysqli_fetch_assoc($connect);

    if ($education['status'] == 'deactive') {
        $update_query = "UPDATE membership SET status='active' WHERE id='$status_id'";
        mysqli_query($conn, $update_query);
        $_SESSION["active_status"] = "Membership status active successfully !!!";
        header("location: membership.php");
    } else {

        $update_query = "UPDATE membership SET status='deactive' WHERE id='$status_id'";
        mysqli_query($conn, $update_query);
        $_SESSION["deactive_status"] = "Membership status deactive successfully !!!";
        header("location: membership.php");
    }
}





if (isset($_REQUEST['edit_btn']) && isset($_REQUEST['edit_id'])) {


    $flag = false;

    $title = trim($_REQUEST['title']);
    $amount = trim($_REQUEST['amount']);
    $duration = trim($_REQUEST['duration']);
    $money_status = trim($_REQUEST['money_status']);


    $id = $_REQUEST['edit_id'];


    if (!$title || !$amount || !$duration || !$money_status) {
        $flag = true;
    }


    if ($flag) {
        $_SESSION["query_error"] = "Your Information doesn't match with our records !!!";
        header("location: membership.php");
    } else {

        $createQuery = "UPDATE `membership` SET `title`='$title',`payments_id`='$duration',`money_status`='$money_status',`amount`='$amount' WHERE id = $id";
        mysqli_query($conn, $createQuery);
        $_SESSION['update'] = "Data Update Successfully !!";
        header("location: membership.php");
    }
}
