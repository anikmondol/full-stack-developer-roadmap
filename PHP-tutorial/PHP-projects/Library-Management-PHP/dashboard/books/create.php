<?php

include("../master/header.php");

$categories_query = "select * FROM categories";
$categories = mysqli_query($conn, $categories_query);
$result = mysqli_fetch_assoc($categories);


?>


<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h2 class="fw-bold">Add Book's</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <p class="fw-bold" style="border-bottom: 0.5px solid gray; padding-bottom: 8px;">File the form</p>
                            <form action="store.php" method="post" class="row g-3">

                                <div class="col-md-6">
                                    <label for="signUpUserBookTitle" class="form-label">Book Title</label>
                                    <input name="book_title" type="text" class="form-control <?= (isset($_SESSION["book_title_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpUserBookTitle" aria-describedby="signUpUserBookTitle" placeholder="Enter Book Title">

                                    <!-- Book_title error start -->
                                    <?php if (isset($_SESSION["book_title_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["book_title_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["book_title_error"]); ?>
                                    <!-- Book_title error end -->
                                </div>



                                <div class="col-md-6">
                                    <label for="signUpISBNNumber" class="form-label">ISBN Number</label>
                                    <input name="ISBN_Number" type="text" class="form-control <?= (isset($_SESSION["ISBN_number_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpISBNNumber" aria-describedby="signUpISBNNumber" placeholder="Enter ISBN Number">

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["ISBN_number_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["ISBN_number_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["ISBN_number_error"]); ?>
                                    <!-- name error end -->
                                </div>


                                <div class="col-md-6">
                                    <label for="signUpUserAuthorName" class="form-label">Author Name</label>
                                    <input name="author_name" type="text" class="form-control <?= (isset($_SESSION["author_name_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpUserAuthorName" aria-describedby="signUpUserAuthorName" placeholder="Enter Author Name">

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["author_name_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["author_name_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["author_name_error"]); ?>
                                    <!-- name error end -->
                                </div>

                                <div class="col-md-6">
                                    <label for="signUpUserAddress" class="form-label">Publication Year</label>
                                    <input name="publication_year" type="text" class="form-control <?= (isset($_SESSION["publication_year_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpUserAddress" aria-describedby="signUpUserAddress" placeholder="Enter Publication Year">

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["publication_year_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["publication_year_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["publication_year_error"]); ?>
                                    <!-- name error end -->
                                </div>

                                <div class="col-md-6">
                                    <label for="signUpUserCategory" class="form-label">Category</label>
                                    <select name="category_id" id="" class="form-control">
                                        <option value="">Please Select</option>

                                        <?php
                                        foreach ($categories as  $value) {
                                        ?>
                                            <option value="<?= $value["id"]; ?>"><?= $value["name"]; ?></option>

                                        <?php } ?>
                                    </select>

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["category_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["category_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["category_error"]); ?>
                                    <!-- name error end -->
                                </div>

                                <div class="auth-submit">
                                    <button type="submit" name="submit" class="btn btn-primary">Insert</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>


<?php include("../master/footer.php") ?>