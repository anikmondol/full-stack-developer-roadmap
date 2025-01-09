<?php

include("../master/header.php");

$payments_query = "select * FROM payments";
$payments = mysqli_query($conn, $payments_query);
$result = mysqli_fetch_assoc($payments);


$genders_query = "select * FROM genders";
$genders = mysqli_query($conn, $genders_query);
$result = mysqli_fetch_assoc($genders);


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

                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control <?= (isset($_SESSION["title_error"])) ? "is-invalid" : ""; ?>" name="title" />

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["title_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["title_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["title_error"]); ?>
                                    <!-- name error end -->

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label">Amount</label>
                                    <input type="text" class="form-control <?= (isset($_SESSION["amount_error"])) ? "is-invalid" : ""; ?>" name="amount" />

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["amount_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["amount_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["amount_error"]); ?>
                                    <!-- name error end -->

                                </div>




                                <div class="col-md-6">
                                    <label for="signUpUserCategory" class="form-label">Duration</label>
                                    <select name="duration" id="" class="form-control <?= (isset($_SESSION["duration_error"])) ? "is-invalid" : ""; ?>">
                                        <option value="">Please Select</option>

                                        <?php
                                        foreach ($payments as  $value) {
                                        ?>
                                            <option value="<?= $value["id"]; ?>"><?= $value["name"]; ?></option>

                                        <?php } ?>
                                    </select>

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["duration_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["duration_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["duration_error"]); ?>
                                    <!-- name error end -->
                                </div>



                                <div class="col-md-6">
                                    <label for="signUpUserCategory" class="form-label">Gender</label>
                                    <select class="form-select form-control <?= (isset($_SESSION["gender_error"])) ? "is-invalid" : ""; ?>" id="validationTooltip04" name="money_status">
                                        <option selected="" value="">Please Select</option>
                                        <option value="paid">Paid </option>
                                        <option value="unpaid">Unpaid </option>
                                    </select>
                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["gender_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["gender_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["gender_error"]); ?>
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