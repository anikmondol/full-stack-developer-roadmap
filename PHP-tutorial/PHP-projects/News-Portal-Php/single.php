<?php include 'header.php';
?>
<div id="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">


                    <?php

                    $single_id = $_REQUEST["single_id"];

                    $sql = "SELECT post.post_id, post.title, post.description,post.post_date,
                            category.category_name,user.username,post.category,post.post_img FROM post
                            LEFT JOIN category ON post.category = category.category_id
                            LEFT JOIN user ON post.author = user.user_id where post_id = $single_id";

                    $result = mysqli_query($conn, $sql) or die("query unsuccessful.");

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {

                    ?>

                            <div class="post-content single-post">
                                <h3> <?= $row['title']; ?> </h3>
                                <div class="post-information">
                                    <span>
                                        <i class="fa fa-tags" aria-hidden="true"></i>
                                        <?= $row['category_name'] ?>
                                    </span>
                                    <span>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <a href='author.php'><?= $row['username'] ?></a>
                                    </span>
                                    <span>
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <?= $row['post_date'] ?>
                                    </span>
                                </div>
                                <img class="single-feature-image" src="admin/upload/<?= $row['post_img'] ?>" alt="<?= $row["title"] ?>" />
                                <p class="description">
                                <?= $row['description'] ?>
                                </p>
                            </div>

                        <?php }
                    } else { ?>
                        <?php echo "<h4> No date found </h4>"; ?>
                    <?php }
                    ?>

                </div>
                <!-- /post-container -->
            </div>
            <?php include 'sidebar.php'; ?>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>