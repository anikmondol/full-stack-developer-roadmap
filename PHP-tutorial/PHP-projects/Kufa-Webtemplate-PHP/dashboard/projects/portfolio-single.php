<?php

include("../../config/database.php");

$id = 1;
$projects_id = $_REQUEST['id'];


$users_query = "select * FROM users WHERE id = $id";
$users = mysqli_query($conn, $users_query);
$result = mysqli_fetch_assoc($users);


$projects_query = "SELECT * FROM projects where id = $projects_id";
$projects = mysqli_query($conn, $projects_query);
$result6 = mysqli_fetch_assoc($projects);

$links_query = "select * FROM links where user_id = $id";
$links = mysqli_query($conn, $links_query);
$link = mysqli_fetch_assoc($links);


?>

<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="../../front_assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../../front_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../front_assets/css/animate.min.css">
    <link rel="stylesheet" href="../../front_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../../front_assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../front_assets/css/flaticon.css">
    <link rel="stylesheet" href="../../front_assets/css/slick.css">
    <link rel="stylesheet" href="../../front_assets/css/aos.css">
    <link rel="stylesheet" href="../../front_assets/css/default.css">
    <link rel="stylesheet" href="../../front_assets/css/style.css">
    <link rel="stylesheet" href="../../front_assets/css/responsive.css">
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a href="index.php" class="navbar-brand logo-sticky-none"><img src="../../front_assets/img/logo/logo.png" alt="Logo"></a>
                                <a href="index.php" class="navbar-brand s-logo-none"><img src="../../front_assets/img/logo/s_logo.png" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="../../index.php#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="../../index.php#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="../../index.php#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="../../index.php#contact">Contact</a></li>
                                        <li class="nav-item"><a class="nav-link" href="../../authentication/register.php">Register</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index.php">
                    <img src="./front_assets/img/logo/logo.png" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>Nawabganj, Dhaka, Bangladesh</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p>+880 193-165-4590</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p>anikmondol558363@gmail.com</p>
                </div>
            </div>
            <div class="social-icon-right mt-20">
                <a href="<?= $link['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                <a href="<?= $link['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                <a href="<?= $link['linkedin'] ?>"><i class="fab fa-linkedin"></i></a>
                <a href="<?= $link['github'] ?>"><i class="fab fa-github"></i></a>

            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="breadcrumb-content text-center">
                            <h2>Portfolio Single POST</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- portfolio-details-area -->
        <section class="portfolio-details-area pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="single-blog-list">
                            <div class="blog-list-thumb mb-35">
                                <img src="../../public/projects/<?= $result6['image'] ?>" alt="img">
                            </div>
                            <div class="blog-list-content blog-details-content portfolio-details-content">
                                <h2><?= $result6['title'] ?></h2>
                                <p><?= $result6['description'] ?></p>
                                <div class="blog-list-meta">
                                    <ul>
                                        <li class="blog-post-date">
                                            <h3>Share On</h3>
                                        </li>
                                        <li class="blog-post-share">
                                            <a href="<?= $link['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                                            <a href="<?= $link['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                                            <a href="<?= $link['linkedin'] ?>"><i class="fab fa-linkedin"></i></a>
                                            <a href="<?= $link['github'] ?>"><i class="fab fa-github"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="avatar-post mt-70 mb-60">
                                <ul>
                                    <li>
                                        <div class="post-avatar-img">
                                            <img style="width: 80px; height: 80px; border-radius: 50%;" src="../../public/profile/<?= $result['image'] ?>" alt="img">
                                        </div>
                                        <div class="post-avatar-content">
                                            <h5><?= $result['name'] ?></h5>
                                            <p>I am Anik Mondol, a Jr. PHP & Laravel Developer with nearly two years of hands-on experience in the field. Proficient in PHP and skilled in the Laravel framework, I specialize in crafting efficient and scalable web solutions. My passion for coding drives me to stay updated with the latest industry trends and technologies.</p>
                                            <div class="post-avatar-social mt-15">
                                                <a href="<?= $link['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                                                <a href="<?= $link['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                                                <a href="<?= $link['linkedin'] ?>"><i class="fab fa-linkedin"></i></a>
                                                <a href="<?= $link['github'] ?>"><i class="fab fa-github"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- portfolio-details-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap primary-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span>Anik Mondol</span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->



    <!-- JS here -->
    <script src="../../front_assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../../front_assets/js/popper.min.js"></script>
    <script src="../../front_assets/js/bootstrap.min.js"></script>
    <script src="../../front_assets/js/isotope.pkgd.min.js"></script>
    <script src="../../front_assets/js/one-page-nav-min.js"></script>
    <script src="../../front_assets/js/slick.min.js"></script>
    <script src="../../front_assets/js/ajax-form.js"></script>
    <script src="../../front_assets/js/wow.min.js"></script>
    <script src="../../front_assets/js/aos.js"></script>
    <script src="../../front_assets/js/jquery.waypoints.min.js"></script>
    <script src="../../front_assets/js/jquery.counterup.min.js"></script>
    <script src="../../front_assets/js/jquery.scrollUp.min.js"></script>
    <script src="../../front_assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../../front_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../../front_assets/js/plugins.js"></script>
    <script src="../../front_assets/js/main.js"></script>
</body>


</html>