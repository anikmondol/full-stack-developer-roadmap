<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Users</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-user.php">add user</a>
            </div>
            <div class="col-md-12">
                <?php

                $sql = "SELECT * FROM user";
                $result = mysqli_query($conn, $sql) or die("query unsuccessful.");

                if (mysqli_num_rows($result) > 0) {

                ?>
                    <table class="content-table">
                        <thead>
                            <th>S.No.</th>
                            <th>Full Name</th>
                            <th>User Name</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php

                            while ($row = mysqli_fetch_assoc($result)) {

                            ?>
                                <tr>
                                    <td class='id'> <?= $row["user_id"] ?> </td>
                                    <td> <?= $row["first_name"] ?> <?= $row["last_name"] ?> </td>
                                    <td> <?= $row["username"] ?> </td>
                                    <td><?= $row["role"] == 1 ? "Admin" : "User" ?></td>
                                    <td class='edit'><a href='update-user.php'><i class='fa fa-edit'></i></a></td>
                                    <td class='delete'><a href='delete-user.php?delete=<?= $row["user_id"] ?>'><i class='fa fa-trash-o'></i></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                <?php } else { ?>
                    <?php echo "<h4> No date found </h4>"; ?>
                <?php }
                mysqli_close($conn);
                ?>

                <ul class='pagination admin-pagination'>
                    <li class="active"><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include "header.php"; ?>