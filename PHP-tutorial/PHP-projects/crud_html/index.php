<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php

    $conn = mysqli_connect("localhost", "root", "", "php_crud") or die("connection failed");

    $sql = "SELECT * FROM students JOIN studentclass where students.sclass = studentclass.cid";
    $result = mysqli_query($conn, $sql) or die("query unsuccessful.");

    if (mysqli_num_rows($result) > 0) {

    ?>
        <table cellpadding="7px">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) {

                ?>
                    <tr>
                        <td><?= $row["sid"] ?></td>
                        <td><?= $row["sname"] ?></td>
                        <td><?= $row["saddress"] ?></td>
                        <td><?= $row["cname"] ?></td>
                        <td><?= $row["sphone"] ?></td>
                        <td>
                            <a href='edit.php'>Edit</a>
                            <a href='delete-inline.php'>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <?php echo "<th> No date found </th>"; ?>
    <?php }
    mysqli_close($conn);
    ?>
</div>
</div>
</body>

</html>