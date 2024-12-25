<!-- Footer -->
<div id ="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php

                    $sql = "SELECT * FROM `settings`";
                    $result = mysqli_query($conn, $sql) or die("query unsuccessful.");

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<span>' . htmlspecialchars($row["FooterDescription"]) . '</span>';

                        }
                    } ?>

            </div>
        </div>
    </div>
</div>
<!-- /Footer -->
</body>
</html>
