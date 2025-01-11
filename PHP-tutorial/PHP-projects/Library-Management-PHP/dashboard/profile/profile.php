<?php

include("../master/header.php");


$students_query = "select * FROM students";
$students = mysqli_query($conn, $students_query);
$result = mysqli_fetch_assoc($students);

?>

<!-- content start -->

<!-- content start -->

<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h2 class="fw-bold">Updata Profile</h2>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-12">
                <?php if (isset($_SESSION['update_info'])) :  ?>
                    <div class="alert alert-custom d-flex align-items-center justify-content-center" role="alert">
                        <div class="custom-alert-icon icon-info"><i class="material-icons-outlined">done</i></div>
                        <div class="alert-content">
                            <span class="alert-title"><span class="m-1"><?php echo $_SESSION['update_info']; ?></span> </span>
                        </div>
                    </div>
                <?php endif;
                unset($_SESSION['update_info']); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <?php if (isset($_SESSION['update_info_error'])) :  ?>
                    <div class="alert alert-custom d-flex align-items-center justify-content-center" role="alert">
                        <div class="custom-alert-icon icon-warning"><i class="material-icons-outlined">warning</i></div>
                        <div class="alert-content">
                            <span class="alert-title text-danger"><span class="m-1"><?php echo $_SESSION['update_info_error']; ?></span> </span>
                        </div>
                    </div>
                <?php endif;
                unset($_SESSION['update_info_error']); ?>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <?php if (isset($_SESSION['update_password'])) :  ?>
                    <div class="alert alert-custom d-flex align-items-center justify-content-center" role="alert">
                        <div class="custom-alert-icon icon-info"><i class="material-icons-outlined">done</i></div>
                        <div class="alert-content">
                            <span class="alert-title"><span class="m-1"><?php echo $_SESSION['update_password']; ?></span> </span>
                        </div>
                    </div>
                <?php endif;
                unset($_SESSION['update_password']); ?>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <?php if (isset($_SESSION['update_password_error'])) :  ?>
                    <div class="alert alert-custom d-flex align-items-center justify-content-center" role="alert">
                        <div class="custom-alert-icon icon-warning"><i class="material-icons-outlined">warning</i></div>
                        <div class="alert-content">
                            <span class="alert-title text-danger"><span class="m-1"><?php echo $_SESSION['update_password_error']; ?></span> </span>
                        </div>
                    </div>
                <?php endif;
                unset($_SESSION['update_password_error']); ?>
            </div>
        </div>






        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="post" enctype="multipart/form-data">
                            <p class="fw-bold" style="border-bottom: 0.5px solid gray; padding-bottom: 8px;">Update Information</p>
                            <div class="col-md-12">
                                <label for="input_name" class="form-label">Name</label>
                                <input name="name" type="text" class="form-control <?= (isset($_SESSION["name_error"])) ? "is-invalid" : ""; ?> " id="input_name">

                                <!-- error start -->
                                <?php if (isset($_SESSION["name_error"])) {
                                ?>
                                    <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["name_error"]; ?> *</div>
                                <?php }
                                unset($_SESSION["name_error"]); ?>
                                <!-- error end -->

                            </div>
                            <div class="col-md-12">
                                <label for="input_email" class="form-label">Email</label>
                                <input name="email" type="text" class="form-control <?= (isset($_SESSION["email_error"])) ? "is-invalid" : ""; ?> " id="input_email">

                                <!-- error start -->
                                <?php if (isset($_SESSION["email_error"])) {
                                ?>
                                    <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["email_error"]; ?> *</div>
                                <?php }
                                unset($_SESSION["email_error"]); ?>

                            </div>
                            <div class="col-md-12">

                                <picture class="d-block my-4">
                                    <img id="port_img" src="../../public/default/default.jpg" alt="portfolio create image" style="width: 100%; height: 100px; object-fit:contain;">
                                </picture>

                                <label for="file" class="form-label">Image</label>
                                <input onchange="document.getElementById('port_img').src= window.URL.createObjectURL(this.files[0])" type="file" name="upload_image" class="form-control mb-2 <?= (isset($_SESSION["image_error"])) ? "is-invalid" : ""; ?> icon_value" id="exampleInputEmail1" aria-describedby="emailHelp">

                                <!-- error start -->
                                <?php if (isset($_SESSION["image_error"])) {
                                ?>
                                    <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["image_error"]; ?> *</div>
                                <?php }
                                unset($_SESSION["image_error"]); ?>

                            </div>


                            <!-- error start -->
                            <?php if (isset($_SESSION["update_info_error"])) {
                            ?>
                                <span style="font-size: 14px;" id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["update_info_error"]; ?> *</span>
                            <?php }
                            unset($_SESSION["update_info_error"]); ?>
                            <!-- error end -->

                            <div class="col-12">
                                <button name="update_info" type="submit" class="btn mt-1 btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <form action="update.php" method="post">
                            <p class="fw-bold" style="border-bottom: 0.5px solid gray; padding-bottom: 8px;">Update Password</p>
                            <div class="col-md-12">
                                <label for="old_inputPassword4" class="form-label">Old Password</label>
                                <input name="password" type="password" class="form-control <?= (isset($_SESSION["password_error"])) ? "is-invalid" : ""; ?> " id="old_inputPassword4">

                                <!-- error start -->
                                <?php if (isset($_SESSION["password_error"])) {
                                ?>
                                    <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["password_error"]; ?> *</div>
                                <?php }
                                unset($_SESSION["password_error"]); ?>


                            </div>
                            <div class="col-md-12">
                                <label for="new_inputPassword4" class="form-label">New Password</label>
                                <input name="new_password" type="password" class="form-control <?= (isset($_SESSION["new_password_error"])) ? "is-invalid" : ""; ?> " id="new_inputPassword4">

                                <!-- error start -->
                                <?php if (isset($_SESSION["new_password_error"])) {
                                ?>
                                    <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["new_password_error"]; ?> *</div>
                                <?php }
                                unset($_SESSION["new_password_error"]); ?>

                            </div>
                            <div class="col-md-12">
                                <label for="confirm_inputPassword4" class="form-label">Confirm Password</label>
                                <input name="confirm_password" type="password" class="form-control <?= (isset($_SESSION["confirm_password_error"])) ? "is-invalid" : ""; ?> " id="confirm_inputPassword4">

                                <!-- error start -->
                                <?php if (isset($_SESSION["confirm_password_error"])) {
                                ?>
                                    <div id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["confirm_password_error"]; ?> *</div>
                                <?php }
                                unset($_SESSION["confirm_password_error"]); ?>
                            </div>


                            <!-- error start -->
                            <?php if (isset($_SESSION["update_password"])) {
                            ?>
                                <span style="font-size: 14px;" id="emailHelp" class="form-text m-b-md text-success"> <?php echo $_SESSION["update_password"]; ?> *</span>
                            <?php }
                            unset($_SESSION["update_password"]); ?>
                            <!-- error end -->


                            <!-- error start -->
                            <?php if (isset($_SESSION["update_password_error"])) {
                            ?>
                                <span style="font-size: 14px;" id="emailHelp" class="form-text m-b-md text-danger"> <?php echo $_SESSION["update_password_error"]; ?> *</span>
                            <?php }
                            unset($_SESSION["update_password_error"]); ?>
                            <!-- error end -->

                            <div class="col-12">
                                <button name="update_password" type="submit" class="btn mt-3 btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<?php

include("../master/footer.php");

?>