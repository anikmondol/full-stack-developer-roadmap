<?php include "header.php";

if ($_SESSION['role'] == 0) {

    $id = $_REQUEST["edit"];

    $sql2 = "SELECT author from post where post_id = $id";

    $result2 = mysqli_query($conn, $sql2) or die("query unsuccessful.");

    $row2 = mysqli_fetch_assoc($result2);


    if ($row2['author'] != $_SESSION["user_id"]) {
        header("location: post.php");
    }


}



?>

<script>
    // JavaScript to show the preview of new uploaded image
    function previewImage(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('image-preview');

        if (file) {
            preview.src = URL.createObjectURL(file);
        }
    }
</script>

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Update Post</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form for show edit-->
                <?php

                if (isset($_REQUEST["edit"])) {

                    $id = $_REQUEST["edit"];

                    $sql = "SELECT post.post_id, post.title, post.description,post.post_date,
                    category.category_name,user.username,post.category,post.post_img FROM post
                    LEFT JOIN category ON post.category = category.category_id
                    LEFT JOIN user ON post.author = user.user_id where post_id = $id";

                    $result = mysqli_query($conn, $sql) or die("query unsuccessful.");

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                ?>
                            <form action="save-update-post.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                                <div class="form-group">
                                    <input type="hidden" name="post_id" class="form-control" value="<?= $row['post_id'] ?>" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputTile"><?= $row['title'] ?></label>
                                    <input type="text" name="post_title" class="form-control" id="exampleInputUsername" value="Lorem ipsum dolor sit amet">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"> Description</label>
                                    <textarea name="postdesc" class="form-control" required rows="5">
                                    <?= $row['description'] ?>
                </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCategory">Category</label>
                                    <select class="form-control" name="category">
                                        <option value="1" <?php echo $row['category'] == 1 ? 'selected' : ''; ?>>Sport</option>
                                        <option value="2" <?php echo $row['category'] == 2 ? 'selected' : ''; ?>>Entertainment</option>
                                        <option value="3" <?php echo $row['category'] == 3 ? 'selected' : ''; ?>>Business</option>
                                        <option value="4" <?php echo $row['category'] == 4 ? 'selected' : ''; ?>>Politics</option>
                                    </select>
                                    <input type="hidden" name="old_category" value="<?= $row['category'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Post image</label>
                                    <input type="file" name="new_image" id="new-image" onchange="previewImage(event)">
                                    <img id="image-preview" style="margin-top: 10px;" src="upload/<?= htmlspecialchars($row['post_img'], ENT_QUOTES, 'UTF-8') ?>" height="150px">
                                    <input type="hidden" name="old_image" value="<?= $row['post_img'] ?>">
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary" value="Update" />
                            </form>
                            <!-- Form End -->
                <?php }
                    }
                } ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>