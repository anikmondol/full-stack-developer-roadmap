<?php

$conn = mysqli_connect("localhost", "root", "", "news_portal_php") or die("connection failed");


$page = basename($_SERVER["PHP_SELF"]);


switch ($page) {
    case 'single.php':
        if (isset($_REQUEST["single_id"])) {

            $sql = "select * from post where post_id = {$_REQUEST["single_id"]}";
            $result = mysqli_query($conn, $sql) or die("query failed");
            $row = mysqli_fetch_assoc($result);

            $page_title = "News Portal/single/" . $row["title"];
        } else {
            $page_title = "No date founds";
        }
        break;
    case 'category.php':
        if (isset($_REQUEST["cid"])) {

            $sql = "select * from category where category_id = {$_REQUEST["cid"]}";
            $result = mysqli_query($conn, $sql) or die("query failed");
            $row = mysqli_fetch_assoc($result);

            $page_title = "News Portal/category/" . $row["category_name"];
        } else {
            $page_title = "No date founds";
        }
        break;
    case 'author.php':
        if (isset($_REQUEST["aid"])) {

            $sql = "select * from user where user_id = {$_REQUEST["aid"]}";
            $result = mysqli_query($conn, $sql) or die("query failed");
            $row = mysqli_fetch_assoc($result);

            $page_title = "News Portal/single/" . $row["username"];
        } else {
            $page_title = "No date founds";
        }
        break;
    case 'search.php':
        if (isset($_REQUEST["search"])) {

            $page_title = "News Portal/search/" . $_REQUEST["search"];
        } else {
            $page_title = "No date founds";
        }
        break;
    default:
        $page_title = "News Portal";
        break;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= $page_title ?></title>
    <link rel="shortcut icon" href="images/neptune.png" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class=" col-md-offset-4 col-md-4">
                    <?php

                    $sql = "SELECT * FROM `settings`";
                    $result = mysqli_query($conn, $sql) or die("query unsuccessful.");

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row["logo"]) {

                                echo '<a href="post.php"><img style="width: 120px;" src="admin/images/' . htmlspecialchars($row['logo'], ENT_QUOTES, 'UTF-8') . '"></a>';
                            } else {
                                echo '<a href="post.php"><img class="logo" src="admin/images/news.jpg"></a>';
                            }
                        }
                    } ?>
                </div>
                <!-- /LOGO -->
            </div>
        </div>
    </div>
    <!-- /HEADER -->
    <!-- Menu Bar -->
    <div id="menu-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php


                    if (isset($_REQUEST["cid"])) {
                        $cat_id = $_REQUEST["cid"];
                    }



                    $sql = "SELECT * FROM `category` WHERE post > 0";
                    $result = mysqli_query($conn, $sql) or die("Query unsuccessful: Category");

                    if (mysqli_num_rows($result) > 0) {
                        $active = "";
                    ?>
                        <ul class='menu'>
                            <li><a class='{$active}' href='index.php'>Home</a></li>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {

                                if (isset($_REQUEST["cid"])) {
                                    $active = $row['category_id'] == $cat_id ? "active" : "";
                                }

                                echo "<li><a class='{$active}' href='category.php?cid={$row['category_id']}'>{$row['category_name']}</a></li>";
                            }
                            ?>
                        </ul>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
    <!-- /Menu Bar -->