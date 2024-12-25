<?php

session_start();

if (!isset($_SESSION["username"])) {
    header("Location: index.php");
}

$conn = mysqli_connect("localhost", "root", "", "news_portal_php") or die("connection failed");


$page = basename($_SERVER["PHP_SELF"]);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ADMIN Panel</title>
    <link rel="shortcut icon" href="../images/neptune.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- HEADER -->
    <div id="header-admin">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-2">

                    <?php

                    $sql = "SELECT * FROM `settings`";
                    $result = mysqli_query($conn, $sql) or die("query unsuccessful.");

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                     if ($row["logo"]) {
                                    
                                    echo '<a href="post.php"><img style="width: 50px;" src="images/' . htmlspecialchars($row['logo'], ENT_QUOTES, 'UTF-8') . '"></a>';
                                } else {
                                    echo '<a href="post.php"><img class="logo" src="images/news.jpg"></a>';
                                }
                     }
                    } ?>


                </div>
                <!-- /LOGO -->
                <!-- LOGO-Out -->
                <div class="col-md-offset-9  col-md-1">
                    <a href="logout.php" class="admin-logout" style="font-size: 16px;"> <?= $_SESSION["username"] ?> logout</a>
                </div>
                <!-- /LOGO-Out -->
            </div>
        </div>
    </div>
    <!-- /HEADER -->
    <!-- Menu Bar -->
    <div id="admin-menubar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="admin-menu">
                        <li>
                            <a class='<?= $page == "post.php" ? "bg-info" : ""; ?>' href="post.php">Post</a>
                        </li>

                        <?php

                        if ($_SESSION["role"] == "1") {
                        ?>
                            <li>
                                <a class='<?= $page == "category.php" ? "bg-info" : ""; ?>' href="category.php">Category</a>
                            </li>
                            <li>
                                <a class='<?= $page == "users.php" ? "bg-info" : ""; ?>' href="users.php">Users</a>
                            </li>
                            <li>
                                <a class='<?= $page == "settings.php" ? "bg-info" : ""; ?>' href="settings.php">Settings</a>
                            </li>

                        <?php } ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /Menu Bar -->