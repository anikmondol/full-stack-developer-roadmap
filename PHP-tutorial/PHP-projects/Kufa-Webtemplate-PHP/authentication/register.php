<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Neptune - Responsive Admin Dashboard Template</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="../dashboard_assets/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard_assets/assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="../dashboard_assets/assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="../dashboard_assets/assets/css/main.min.css" rel="stylesheet">
    <link href="../dashboard_assets/assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="../dashboard_assets/assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../dashboard_assets/assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app app-auth-sign-up align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="../../Kufa-Webtemplate-PHP/index.php">Back Home</a></p>

            <form action="register_post.php" method="post">

                <div class="auth-credentials m-b-xxl">

                    <label for="signUpUsername" class="form-label">Name</label>
                    <input name="name" type="text" class="form-control <?= (isset($_SESSION["name_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter Name" value="<?= (isset($_SESSION["old_name"])) ? $_SESSION["old_name"] : "";
                                                                                                                                                                                                                                    unset($_SESSION["old_name"]); ?>">

                    <!-- name error start -->
                    <?php if (isset($_SESSION["name_error"])) {
                    ?>
                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["name_error"]; ?> *</div>
                    <?php }
                    unset($_SESSION["name_error"]); ?>
                    <!-- name error end -->


                    <label for="signUpEmail" class="form-label">Email address</label>
                    <input name="email" type="text" class="form-control <?= (isset($_SESSION["email_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpEmail" aria-describedby="signUpEmail" placeholder="example@neptune.com" value="<?= (isset($_SESSION["old_email"])) ? $_SESSION["old_email"] : "";
                                                                                                                                                                                                                                        unset($_SESSION["old_email"]); ?>">

                    <!-- name error start -->
                    <?php if (isset($_SESSION["email_error"])) {
                    ?>
                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["email_error"]; ?> *</div>
                    <?php }
                    unset($_SESSION["email_error"]); ?>
                    <!-- name error end -->

                    <!-- duplicate email error start -->
                    <?php if (isset($_SESSION["duplicate"])) {
                    ?>
                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["duplicate"]; ?> *</div>
                    <?php }
                    unset($_SESSION["duplicate"]); ?>
                    <!-- duplicate email error end -->

                    <label for="signUpPassword" class="form-label">Password</label>
                    <input id="myInput" name="password" type="password" class="form-control <?= (isset($_SESSION["password_error"])) ? "is-invalid" : ""; ?>" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" value="<?= (isset($_SESSION["old_password"])) ? $_SESSION["old_password"] : "";
                                                                                                                                                                                                                                                                                unset($_SESSION["old_password"]); ?>">
                    <input class="my-3 lead" type="checkbox" onclick="myFunction()"> <span>Show Password</span>
                    <br>


                    <!-- name error start -->
                    <?php if (isset($_SESSION["password_error"])) {
                    ?>
                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["password_error"]; ?> *</div>
                    <?php }
                    unset($_SESSION["password_error"]); ?>
                    <!-- name error end -->

                    <label for="signUpPassword" class="form-label">Confirm Password</label>
                    <input name="confirm_password" type="password" class="form-control <?= (isset($_SESSION["confirm_password_error"])) ? "is-invalid" : ""; ?>" id="signUpPassword" aria-describedby="signUpPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">

                    <!-- confirm_password error start -->
                    <?php if (isset($_SESSION["confirm_password_error"])) {
                    ?>
                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["confirm_password_error"]; ?> *</div>
                    <?php }
                    unset($_SESSION["confirm_password_error"]); ?>
                    <!-- confirm_password error end -->

                </div>

                <div class="auth-submit">
                    <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
                </div>

            </form>

            <div class="divider"></div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="../dashboard_assets/assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="../dashboard_assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../dashboard_assets/assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../dashboard_assets/assets/plugins/pace/pace.min.js"></script>
    <script src="../dashboard_assets/assets/js/main.min.js"></script>
    <script src="../dashboard_assets/assets/js/custom.js"></script>

    <!-- custom js -->
    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

</body>

</html>