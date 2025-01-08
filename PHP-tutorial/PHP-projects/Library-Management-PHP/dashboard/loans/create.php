<?php

include("../master/header.php");

$students_query = "select * FROM students";
$students = mysqli_query($conn, $students_query);
$result = mysqli_fetch_assoc($students);


$books_query = "select * FROM books";
$books = mysqli_query($conn, $books_query);
$result = mysqli_fetch_assoc($books);


?>


<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h2 class="fw-bold">Add Loan's</h2>
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
                                    <label for="signUpUserCategory" class="form-label">Students</label>
                                    <select name="student" id="" class="form-control">
                                        <option value="">Please Select</option>

                                        <?php
                                        foreach ($students as  $value) {
                                        ?>
                                            <option value="<?= $value["id"]; ?>"><?= $value["name"]; ?></option>

                                        <?php } ?>
                                    </select>

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["student_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["student_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["student_error"]); ?>
                                    <!-- name error end -->
                                </div>



                                <div class="col-md-6">
                                    <label for="signUpUserCategory" class="form-label">Book</label>
                                    <select name="book" id="" class="form-control">
                                        <option value="">Please Select</option>

                                        <?php
                                        foreach ($books as  $value) {
                                        ?>
                                            <option value="<?= $value["id"]; ?>"><?= $value["title"]; ?></option>

                                        <?php } ?>
                                    </select>

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["book_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["book_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["book_error"]); ?>
                                    <!-- name error end -->
                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">Loan Date</label>
                                    <input type="date" class="form-control" name="loan_date" />

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["loan_date_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["loan_date_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["loan_date_error"]); ?>
                                    <!-- name error end -->

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label">Return/Due Date</label>
                                    <input type="date" class="form-control" name="return_date" />

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["return_date_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["return_date_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["return_date_error"]); ?>
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