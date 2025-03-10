<?php

session_start();

if (isset($_SESSION['auth_id'])) {
    header("location: ./dashboard/home/home.php");
}


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
    <link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="./assets/plugins/pace/pace.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="./assets/css/main.min.css" rel="stylesheet">
    <link href="./assets/css/custom.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex flex-wrap justify-content-end">
        <div class="app-auth-background">

        </div>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.php">Star library</a>
            </div>
            <p class="auth-description">Enter email and password to login</p>

            <!-- login failed  msg start -->
            <?php if (isset($_SESSION["login_failed"])) {
            ?>
                <div class="alert alert-custom d-flex justify-content-center align-items-center alert-light" role="alert">
                    <div class="custom-alert-icon icon-danger "><i class="material-icons-outlined text-error">error</i></div>
                    <div class="alert-content ">
                        <span class="alert-title text-error"> <?php echo $_SESSION["login_failed"]; ?> </span>
                    </div>
                </div>
            <?php unset($_SESSION["login_failed"]);
            } ?>
            <!-- login failed  msg end -->


            <div class="row">
                <div class="col-12">
                    <?php if (isset($_SESSION['update_forget_password'])) :  ?>
                        <div class="alert alert-custom d-flex align-items-center justify-content-center" role="alert">
                            <div class="custom-alert-icon icon-info"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title"><span class="m-1"><?php echo $_SESSION['update_forget_password']; ?></span> </span>
                            </div>
                        </div>
                    <?php endif;
                    unset($_SESSION['update_forget_password']); ?>
                </div>
            </div>

            <form action="./authentication/index_post.php">

                <div class="auth-credentials m-b-xxl">
                    <label for="signInEmail" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control <?= (isset($_SESSION["email_error"])) ? "is-invalid" : ""; ?> " id="signInEmail" aria-describedby="signInEmail" placeholder="example@neptune.com">

                    <!-- name error start -->
                    <?php if (isset($_SESSION["email_error"])) {
                    ?>
                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["email_error"]; ?> *</div>
                    <?php }
                    unset($_SESSION["email_error"]); ?>
                    <!-- name error end -->


                    <label for="signInPassword" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control <?= (isset($_SESSION["password_error"])) ? "is-invalid" : ""; ?> " id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">

                    <!-- password error start -->
                    <?php if (isset($_SESSION["password_error"])) {
                    ?>
                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["password_error"]; ?> *</div>
                    <?php }
                    unset($_SESSION["password_error"]); ?>
                    <!-- password error end -->

                </div>

                <div class="auth-submit">
                    <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>

            </form>



            <div class="divider"></div>
            <h6><a class="text-decoration-none" href="./authentication/forget-password.php">Forget password?</a></h6>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="./assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="./assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="./assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="./assets/plugins/pace/pace.min.js"></script>
    <script src="./assets/js/main.min.js"></script>
    <script src="./assets/js/custom.js"></script>
</body>

</html>