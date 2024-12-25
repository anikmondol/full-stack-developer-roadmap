<script>
    // Function to preview the selected image
    function previewImage(event) {
        const imagePreview = document.getElementById('image-preview');
        imagePreview.src = URL.createObjectURL(event.target.files[0]);
        imagePreview.onload = () => URL.revokeObjectURL(imagePreview.src);
    }
</script>


<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Website Settings</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">

                <?php

                $sql = "SELECT * FROM `settings`";



                $result = mysqli_query($conn, $sql) or die("query unsuccessful.");

                if (mysqli_num_rows($result) > 0) {

                    while ($row = mysqli_fetch_assoc($result)) {

                ?>

                        <!-- Form -->
                        <form action="settings-update.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                            <div class="form-group">
                                <input type="hidden" name="post_id" class="form-control" value="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputTile">Website Name</label>
                                <input type="text" name="WebsiteName" class="form-control" id="exampleInputUsername"
                                    value="<?= $row['WebsiteName'] ?>" placeholder="Enter post title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Footer Description</label>
                                <textarea name="FooterDescription" class="form-control" required rows="5"
                                    placeholder="Enter post description"><?= $row['FooterDescription'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="new-image">Footer Image</label>
                                <input type="file" name="new_image" id="new-image" onchange="previewImage(event)">
                                <?php
                                
                                if ($row["logo"]) {
                                    
                                    echo '<img id="image-preview" style="margin-top: 10px;" src="images/' . htmlspecialchars($row['logo'], ENT_QUOTES, 'UTF-8') . '" height="150px">';
                                
                                    
                                } else {
                                    echo '<img id="image-preview" style="margin-top: 10px;" src="images/news.jpg" height="150px">';
                                
                                }
                                
                                
                                ?>
                                <input type="hidden" name="old_image" value="<?= $row['logo'] ?>">
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="Update">
                        </form>
                        <!--/Form -->
                <?php }
                } ?>

            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>