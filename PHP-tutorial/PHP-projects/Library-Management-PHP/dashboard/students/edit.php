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
                                    <input value="<?= $result['name']; ?>" name="name" type="text" class="form-control <?= (isset($_SESSION["name_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpUsername" aria-describedby="signUpUsername" placeholder="Enter Name">
                                </div>



                                <div class="col-md-6">
                                    <label for="signUpEmail" class="form-label">Email Address</label>
                                    <input value="<?= $result['email']; ?>" name="email" type="text" class="form-control <?= (isset($_SESSION["email_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpEmail" aria-describedby="signUpEmail" placeholder="example@gmail.com">

                                
                                </div>


                                <div class="col-md-6">
                                    <label for="signUpUserPhone" class="form-label">Phone</label>
                                    <input value="<?= $result['phone']; ?>" name="phone" type="text" class="form-control <?= (isset($_SESSION["phone_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpUserPhone" aria-describedby="signUpUserPhone" placeholder="Enter Phone Number">
                                </div>

                                <div class="col-md-6">
                                    <label for="signUpUserAddress" class="form-label">Address</label>
                                    <input value="<?= $result['address']; ?>" name="address" type="text" class="form-control <?= (isset($_SESSION["address_error"])) ? "is-invalid" : ""; ?> m-b-md" id="signUpUserAddress" aria-describedby="signUpUserAddress" placeholder="Enter Address">
                                </div>




                                <div class="auth-submit">
                                    <button type="submit" name="edit_btn" class="btn btn-primary">Update</button>
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


