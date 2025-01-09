<?php

include("../master/header.php");

$payments_query = "select * FROM payments";
$payments = mysqli_query($conn, $payments_query);
$result = mysqli_fetch_assoc($payments);


$genders_query = "select * FROM genders";
$genders = mysqli_query($conn, $genders_query);
$result = mysqli_fetch_assoc($genders);



if (isset($_REQUEST["editId"])) {

    $id = $_REQUEST['editId'];


    if (isset($_REQUEST["editId"])) {

        $id = $_REQUEST['editId'];


        $books_query = "SELECT m.*, p.name AS name FROM membership m  INNER JOIN payments p ON p.id = m.payments_id where m.id = $id";



        $book = mysqli_query($conn, $books_query);
        $result3 = mysqli_fetch_assoc($book);
    }
}



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
                            <form action="store.php?edit_id=<?= $result3['id'] ?>" method="post" class="row g-3">


                                <div class="col-md-6">

                                    <label class="form-label">Title</label>
                                    <input value="<?= $result3['title'] ?>" type="text" class="form-control" name="title" />

                                </div>

                                <div class="col-md-6">

                                    <label class="form-label">Amount</label>
                                    <input value="<?= $result3['amount'] ?>" type="text" class="form-control" name="amount" />

                                </div>

                                <div class="col-md-6">
                                    <label for="signUpUserCategory" class="form-label">Duration</label>
                                    <select name="duration" id="" class="form-control">
                                        <option value="">Please Select</option>

                                        <?php
                                        foreach ($payments as  $value) {
                                        ?>

                                            <option <?= $value["id"] == $result3['payments_id'] ? 'selected' : ""; ?> value="<?= $value["id"]; ?>"><?= $value["name"]; ?></option>

                                        <?php } ?>
                                    </select>

                                </div>

                                <div class="col-md-6">
                                    <label for="signUpUserCategory" class="form-label">Gender</label>
                                    <select name="money_status" id="" class="form-control">
                                        <option selected="" value="">Please Select</option>
                                        <option <?= $result3['money_status'] == "paid" ? "selected" : "" ?> value="paid">Paid </option>
                                        <option <?= $result3['money_status'] == "unpaid" ? "selected" : "" ?> value="unpaid">Unpaid </option>
                                    </select>

                                </div>

                                <div class="auth-submit">
                                    <button type="submit" name="edit_btn" class="btn btn-primary">Updata</button>
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