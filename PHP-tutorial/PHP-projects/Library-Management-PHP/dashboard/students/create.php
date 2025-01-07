<?php

include("../master/header.php")


?>


<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h2 class="fw-bold">Add Student's</h2>
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
                                    <label for="signUpUsername" class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control <?= (isset($_SESSION["name_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter Name" value="<?= (isset($_SESSION["old_name"])) ? $_SESSION["old_name"] : "";
                                                                                                                                                                                                                                                    unset($_SESSION["old_name"]); ?>">

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["name_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["name_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["name_error"]); ?>
                                    <!-- name error end -->
                                </div>



                                <div class="col-md-6">
                                    <label for="signUpEmail" class="form-label">Email address</label>
                                    <input name="email" type="text" class="form-control <?= (isset($_SESSION["email_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpEmail" aria-describedby="signUpEmail" placeholder="example@neptune.com" value="<?= (isset($_SESSION["old_email"])) ? $_SESSION["old_email"] : "";
                                                                                                                                                                                                                                                        unset($_SESSION["old_email"]); ?>">

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["email_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["email_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["email_error"]); ?>
                                    <!-- name error end -->

                                    <!-- duplicate email error start -->
                                    <?php if (isset($_SESSION["duplicate"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["duplicate"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["duplicate"]); ?>
                                    <!-- duplicate email error end -->
                                </div>


                                <div class="col-md-6">
                                    <label for="signUpUserPhone" class="form-label">Name</label>
                                    <input name="phone" type="text" class="form-control <?= (isset($_SESSION["phone_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpUserPhone" aria-describedby="signUpUserPhone" placeholder="Enter Name" value="<?= (isset($_SESSION["old_phone"])) ? $_SESSION["old_phone"] : "";
                                                                                                                                                                                                                                                        unset($_SESSION["old_phone"]); ?>">

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["phone_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["phone_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["phone_error"]); ?>
                                    <!-- name error end -->
                                </div>

                                <div class="col-md-6">
                                    <label for="signUpUserAddress" class="form-label">Name</label>
                                    <input name="address" type="text" class="form-control <?= (isset($_SESSION["address_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpUserAddress" aria-describedby="signUpUserAddress" placeholder="Enter Name" value="<?= (isset($_SESSION["old_address"])) ? $_SESSION["old_address"] : "";
                                                                                                                                                                                                                                                        unset($_SESSION["old_address"]); ?>">

                                    <!-- name error start -->
                                    <?php if (isset($_SESSION["address_error"])) {
                                    ?>
                                        <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["address_error"]; ?> *</div>
                                    <?php }
                                    unset($_SESSION["address_error"]); ?>
                                    <!-- name error end -->
                                </div>




                                <div class="auth-submit">
                                    <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
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



<!-- <div class="card">
    <div class="card-header">
        <h5 class="card-title">Form Grid</h5>
    </div>
    <div class="card-body">
        <p class="card-description">More complex forms can be built using Bootstrap grid classes. Use these for form layouts that require multiple columns, varied widths, and additional alignment options. <strong>Requires the <code>$enable-grid-classes</code> Sass variable to be enabled</strong> (on by default).</p>
        <div class="example-container">
            <div class="example-content">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress2" class="form-label">Address 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                            <option selected="">Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div> -->