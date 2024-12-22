<?php

include "header.php";


if (isset($_REQUEST["save"])) {
    
    $cat = mysqli_real_escape_string($conn, trim($_REQUEST["cat"]));

   
    $check_cat_query = "SELECT category_name FROM `category` WHERE category_name = '$cat'";
    $check_result = mysqli_query($conn, $check_cat_query);

    if (mysqli_num_rows($check_result) > 0) {
        echo "<p style='color:red;text-align:center;margin:10px 0'>Category already exists. Please choose another.</p>";
    } else {
        $sql = "INSERT INTO `category`(`category_name`) VALUES ('$cat')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: category.php");
        } else {
            echo "Query unsuccessful: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add New Category</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form action="" method="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" name="cat" class="form-control" placeholder="Category Name" required>
                      </div>
                      <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                  </form>
                  <!-- /Form End -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
