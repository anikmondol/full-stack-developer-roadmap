<div id="sidebar" class="col-md-4">
    <!-- search box -->
    <div class="search-box-container">
        <h4>Search</h4>
        <form class="search-post" action="search.php" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search .....">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-danger">Search</button>
                </span>
            </div>
        </form>
    </div>
    <!-- /search box -->
    <!-- recent posts box -->
    <div class="recent-post-container">
        <h4>Recent Posts</h4>
        <?php

$conn = mysqli_connect("localhost", "root", "", "news_portal_php") or die("connection failed");

        $limit = 5;


        $sql = "SELECT post.post_id, post.title, post.post_date, category.category_name, post.category, post.post_img FROM post LEFT JOIN category ON post.category = category.category_id ORDER BY post.post_id DESC LIMIT {$limit};";

        $result = mysqli_query($conn, $sql) or die("query unsuccessful.");

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_assoc($result)) {

        ?>
                <div class="recent-post">
                    <a class="post-img" href='single.php?single_id=<?= $row['post_id']?>'>
                        <img src="admin/upload/<?= $row['post_img'] ?>" alt="<?= $row['title']?>" />
                    </a>
                    <div class="post-content">
                        <h5><a href='single.php?single_id=<?= $row['post_id']?>'><?= $row['title']?></a></h5>
                        <span>
                            <i class="fa fa-tags" aria-hidden="true"></i>
                            <a href='category.php?cid=<?= $row['category']?>'><?= $row['category_name']?></a>
                        </span>
                        <span>
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <?= $row['post_date']?>
                        </span>
                        <a class="read-more" href='single.php?single_id=<?= $row['post_id']?>'>read more</a>
                    </div>
                </div>

        <?php }
        } ?>

    </div>
    <!-- /recent posts box -->
</div>