<?php
include "header.php";

if ($_SESSION["role"] == "0") {
    header("Location: post.php");
}

if (isset($_REQUEST["sumbit"])) {

    $cat_id = mysqli_real_escape_string($conn, $_REQUEST["cat_id"]);
    $cat_name = mysqli_real_escape_string($conn, $_REQUEST["cat_name"]);



    $sql = "UPDATE `category` SET `category_name`='$cat_name' WHERE category_id = $cat_id";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: category.php");
    } else {
        echo "<p style='color:red;text-align:center;margin:10px 0'>Username already exists. Please choose another.</p>";
    }

    mysqli_close($conn);
}


?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="adin-heading"> Update Category</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <?php

                if (isset($_REQUEST["edit"])) {

                    $id = $_REQUEST["edit"];

                    $sql = "SELECT * FROM category where category_id = $id";
                    $result = mysqli_query($conn, $sql) or die("query unsuccessful.");

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                ?>
                            <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
                                <div class="form-group">
                                    <input type="hidden" name="cat_id" class="form-control" value="<?= $row["category_id"] ?>" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>Category Name</label>
                                    <input type="text" name="cat_name" class="form-control" value="<?= $row["category_name"] ?>" placeholder="" required>
                                </div>
                                <input type="submit" name="sumbit" class="btn btn-primary" value="Update" required />
                            </form>
                <?php }
                    }
                } ?>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>