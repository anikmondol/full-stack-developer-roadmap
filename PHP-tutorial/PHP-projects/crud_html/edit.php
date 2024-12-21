<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    
    $id = $_REQUEST["id"];


    $sql = "SELECT * FROM students WHERE sid = $id";
    $result = mysqli_query($conn, $sql) or die("Query unsuccessful: " . mysqli_error($conn));
    

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?= $row['sid']; ?>"/>
          <input type="text" name="sname" value="<?= $row['sname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?= $row['saddress']; ?>"/>
      </div>
      <div class="form-group">
            <label>Class</label>
            <select name="sclass">
                <option value="" selected disabled>Select Class</option>
                <?php
                $sql = "SELECT * FROM studentclass";
                $result1 = mysqli_query($conn, $sql) or die("query unsuccessful.");
                 while ($row1 = mysqli_fetch_assoc($result1)) {
                    $selected = ($row1['cid'] == $row['sclass']) ? "selected" : "";
                ?>
               <option value="<?= $row1['cid']; ?>" <?= $selected; ?>><?= $row1['cname']; ?></option>
                <?php } ?>

            </select>
        </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?= $row['sphone']; ?>"/>
      </div>
      <input class="submit" type="submit" name="Update" value="Update"/>
    </form>

    <?php } }?>

</div>
</div>
</body>
</html>
