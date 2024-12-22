<?php
include "header.php";

if (isset($_REQUEST["submit"])) {
    
    $user_id = mysqli_real_escape_string($conn, $_REQUEST["user_id"]);
    $f_name = mysqli_real_escape_string($conn, $_REQUEST["f_name"]);
    $l_name = mysqli_real_escape_string($conn, $_REQUEST["l_name"]);
    $username = mysqli_real_escape_string($conn, $_REQUEST["username"]);
    $role = mysqli_real_escape_string($conn, $_REQUEST["role"]);


    $sql = "UPDATE `user` SET `first_name`='$f_name',`last_name`='$l_name',`username`='$username',`role`='$role' WHERE user_id = $user_id";

    
    $result = mysqli_query($conn, $sql);

   if ($result) {
        header("Location: users.php");
    } else {
        echo "Query unsuccessful: " . mysqli_error($conn);
    }

    mysqli_close($conn);


}


?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Modify User Details</h1>
            </div>
            <div class="col-md-offset-4 col-md-4">
                <?php

                if (isset($_REQUEST["edit"])) {

                    $id = $_REQUEST["edit"];

                    $sql = "SELECT * FROM user where user_id = $id";
                    $result = mysqli_query($conn, $sql) or die("query unsuccessful.");

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                ?>
                            <!-- Form Start -->
                            <form action="" method="POST">
                                <div class="form-group">
                                    <input type="hidden" name="user_id" class="form-control" value="<?= $row["user_id"] ?>" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="f_name" class="form-control" value="<?= $row["first_name"] ?>" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="l_name" class="form-control" value="<?= $row["last_name"] ?>" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="text" name="username" class="form-control" value="<?= $row["username"] ?>" placeholder="" required>
                                </div>
                                <div class="form-group">
                                    <label>User Role</label>
                                    <select class="form-control" name="role">
                                        <option value="0" <?php echo $row['role'] == 0 ? 'selected' : ''; ?>>User</option>
                                        <option value="1" <?php echo $row['role'] == 1 ? 'selected' : ''; ?>>Admin</option>
                                    </select>
                                </div>

                                <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                            </form>
                <?php }
                    }
                } ?>
                <!-- /Form -->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>