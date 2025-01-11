<?php

session_start();

require "../config/database.php";


if (isset($_REQUEST['reset_btn'])) {

    $otp = trim($_REQUEST['otp']);
    $new_password = trim($_REQUEST['new_password']);
    $confirm_password = trim($_REQUEST['confirm_password']);

    $flag = false;


    if (!$otp) {
        $_SESSION["otp_error"] = "Otp Field is Required!!!";
        $flag = true;
        header("location: reset.php");
    }


    if (!$new_password) {
        $_SESSION["new_password_error"] = "New Password Field is Required!!!";
        $flag = true;
        header("location: reset.php");
    }

    if (!$confirm_password) {
        $_SESSION["confirm_password_error"] = "Confirm password Field is Required!!!";
        $flag = true;
        header("location: reset.php");
    } elseif ($new_password != $confirm_password) {
        $_SESSION["confirm_password_error"] = "Confirm password credential doesn't match !!!";
        $flag = true;
        header("location: reset.php");
    }


    if ($flag) {
        echo "error";
    } else {
        if ($_SESSION["otp_session"] == $otp) {
            $get_data_query = "SELECT * FROM `forgot_password` WHERE reset_code = $otp";
            $connect = mysqli_query($conn, $get_data_query);
            $result2 = mysqli_fetch_assoc($connect);

            $user_id = $result2['user_id'];


            $new_encrypt_pass = sha1($new_password);

            $sql = "UPDATE `users` SET `password`='$new_encrypt_pass' WHERE id = $user_id";
            mysqli_query($conn, $sql);
            $_SESSION["update_forget_password"] = "Forget password set !!!";

            $sql = "DELETE FROM `forgot_password` WHERE id = " . $result2['reset_code'];
            $conn->query($sql);

            header("location: ../dashboard/home/home.php");


        } else {
            $_SESSION["otp_error"] = "Reset Code credential doesn't match !!!";
            header("location: reset.php");
        }
    }
}
