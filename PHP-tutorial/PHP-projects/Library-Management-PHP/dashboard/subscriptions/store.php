<?php

session_start();

require "../../config/database.php";


if (isset($_REQUEST['submit'])) {

    $plan = $_REQUEST['plan'];
    $student = $_REQUEST['student'];



    if (!$plan) {
        $_SESSION["plan_error"] = "Plan Field is Required!!!";
        $flag = true;
        header("location: subscriptions.php");
    }


    if (!$student) {
        $_SESSION["student_error"] = "Student status Field is Required!!!";
        $flag = true;
        header("location: subscriptions.php");
    }


    $flag = false;




    if ($flag) {
        echo "error";
    } else {



        $plan_data_query = "SELECT * FROM membership where payments_id = $plan";
        $plan_data = mysqli_query($conn, $plan_data_query);
        $plan_data_result = mysqli_fetch_assoc($plan_data);



        $title = $plan_data_result['title'];
        $amount = $plan_data_result['amount'];
        $payments_id = $plan_data_result['payments_id'];
        $status = $plan_data_result['status'];



        echo $count_query = "SELECT COUNT(*) AS 'count_result' FROM `subscription_plans` where id = $student";
        $connect = mysqli_query($conn, $count_query);


        if (mysqli_fetch_assoc($connect)['count_result'] > 0) {
            $_SESSION['query_error'] = "Membership already exists";
            header("location: subscriptions.php");
        } else {



            $datetime = date("Y-m-d H:i:s");
            $start_date = date("Y-m-d");
            $end_date = date("Y-m-d");



            ## start date - end date calculation
            $start_date = date("Y-m-d");
            $start_time = strtotime($start_date);
            $end_date = date("Y-m-d", strtotime("+$payments_id month", $start_time));



            $createQuery = "INSERT INTO `subscription_plans`(`id`, `title`, `amount`, `duration`) VALUES ('$student','$title','$amount','$payments_id')";
            mysqli_query($conn, $createQuery);
            $_SESSION['insert'] = "Subscriptions Insert Successfully !!";
            header("location: subscriptions.php");
        }
    }
}
