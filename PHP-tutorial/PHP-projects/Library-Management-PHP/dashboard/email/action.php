<?php

session_start();


include "../../config/database.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../src/PHPMailer.php';
require '../../src/SMTP.php';
require '../../src/Exception.php';

if (isset($_POST['forget_btn'])) {

    $email = $_POST['forget_email'];


    // email regex 
    $email_regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';



    if (!$email) {
        $_SESSION["error"] = "Email Field is Required !!!";
        header('location: ../../authentication/forget-password.php');
    } elseif (!preg_match($email_regex, $email)) {
        $_SESSION["error"] = "Invalid email provide!!!";
        $flag = true;
        header("location: ../../authentication/forget-password.php");
    }

    

    $sql = "select * from users where email = '$email'";
    $res = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($res);

    $user_id = $result['id'];
    $otp = rand(111111, 999999);




    if ($email && $user_id) {

        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);


        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'anikmondol558363@gmail.com';                     //SMTP username
        $mail->Password   = 'ppwixlbxgnkpfdci';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($mail->Username, 'Anik Mondol');
        $mail->addAddress($email);     //Add a recipient
        $mail->addReplyTo($mail->Username);


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Welcome to our Portfolio Community';
        $mail->Body    = "Your reset password code is " . $otp;

        if ($mail->send()) {
            $insert = "INSERT INTO `forgot_password`(`user_id`, `reset_code`) VALUES ('$user_id', $otp)";
            mysqli_query($conn, $insert);
            $_SESSION["otp_session"] = $otp;
            header('location: ../../authentication/reset.php');
        }else{
            $_SESSION["error"] = "something error try more !!!";
            header('location: ../../authentication/forget-password.php');
        }
    }
}
