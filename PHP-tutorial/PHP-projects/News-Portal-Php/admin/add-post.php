<?php

include "header.php";

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
                <h1 class="admin-heading">Add New Post</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form -->
                <form action="save-post.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="post_title">Title</label>
                        <input type="text" name="post_title" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Description</label>
                        <textarea name="postdesc" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Category</label>
                        <select name="category">
                            <option value="" selected disabled>Select Class</option>
                            <?php
                            $sql = "SELECT * FROM category";
                            $result1 = mysqli_query($conn, $sql) or die("query unsuccessful.");
                            while ($row1 = mysqli_fetch_assoc($result1)) {

                            ?>
                                <option value="<?= $row1["category_id"] ?>"> <?= $row1["category_name"] ?> </option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Post image</label>
                        <input type="file" name="fileToUpload" id="new-image" onchange="previewImage(event)" required>
                        <img id="image-preview" style="margin-top: 10px;" src="" height="150px">
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Save" required />
                </form>
                <!--/Form -->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>