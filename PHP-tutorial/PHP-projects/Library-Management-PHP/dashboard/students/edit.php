<?php

include("../master/header.php");

if (isset($_REQUEST["editId"])) {
    
    $id = $_REQUEST['editId'];

    $students_query = "SELECT * FROM students where id = $id";
    $students = mysqli_query($conn, $students_query);
    $result = mysqli_fetch_assoc($students);

}

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
                            <form action="store.php?edit_id=<?= $result['id'] ?>" method="post" class="row g-3">

                                <div class="col-md-6">
                                    <label for="signUpUsername" class="form-label">Name</label>
                                    <input value="<?= $result['name']; ?>" name="name" type="text" class="form-control <?= (isset($_SESSION["name_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter Name" value="<?= (isset($_SESSION["old_name"])) ? $_SESSION["old_name"] : "";
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
                                    <label for="signUpEmail" class="form-label">Email Address</label>
                                    <input value="<?= $result['email']; ?>" name="email" type="text" class="form-control <?= (isset($_SESSION["email_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpEmail" aria-describedby="signUpEmail" placeholder="example@gmail.com" value="<?= (isset($_SESSION["old_email"])) ? $_SESSION["old_email"] : "";
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
                                    <label for="signUpUserPhone" class="form-label">Phone</label>
                                    <input value="<?= $result['phone']; ?>" name="phone" type="text" class="form-control <?= (isset($_SESSION["phone_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpUserPhone" aria-describedby="signUpUserPhone" placeholder="Enter Phone Number" value="<?= (isset($_SESSION["old_phone"])) ? $_SESSION["old_phone"] : "";
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
                                    <label for="signUpUserAddress" class="form-label">Address</label>
                                    <input value="<?= $result['address']; ?>" name="address" type="text" class="form-control <?= (isset($_SESSION["address_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpUserAddress" aria-describedby="signUpUserAddress" placeholder="Enter Address" value="<?= (isset($_SESSION["old_address"])) ? $_SESSION["old_address"] : "";
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
                                    <button type="submit" name="edit_btn" class="btn btn-primary">Sign Up</button>
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


