<?php

include("../master/header.php");



$membership_query = "select * FROM membership";
$membership = mysqli_query($conn, $membership_query);



$students_query = "select * FROM students";
$students = mysqli_query($conn, $students_query);



$subscription_query = "SELECT subscription_plans.*,s.name as student_name, s.status as status, m.start_date as start_date, m.end_date as end_date FROM `subscription_plans` INNER JOIN students s  ON s.id = subscription_plans.id inner join membership m on m.payments_id = subscription_plans.duration";
$subscription = mysqli_query($conn, $subscription_query);
$result = mysqli_fetch_assoc($subscription);

?>

<!-- content start -->



<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description d-flex align-content-center justify-content-between">
                        <h2 class="fw-bold">Manage Books Loans</h2>
                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#subsModal">
                            Create Subscription
                        </button>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade " id="subsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="display: flex !important; align-items: center; justify-content: space-between;">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Create Subscription</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 10px;"></button>
                        </div>
                        <div class="modal-body">
                            <form action="store.php" method="post" class="row g-3">
                                <div class="col-md-12">
                                    <label for="signUpUserCategory" class="form-label fs-6">Select Student</label>
                                    <select name="student" id="" class="form-control">
                                        <option value="">Please Select</option>

                                        <?php
                                        foreach ($students as  $value) {
                                        ?>
                                            <option value="<?= $value["id"]; ?>"><?= $value["name"]; ?></option>

                                        <?php } ?>
                                    </select>

                                </div>

                                <div class="col-md-12">
                                    <label for="signUpUserCategory" class="form-label fs-6">Select Plan</label>
                                    <select name="plan" id="" class="form-control">
                                        <option value="">Please Select</option>

                                        <?php
                                        foreach ($membership as  $value) {
                                        ?>
                                            <option value="<?= $value["id"]; ?>"><?= $value["title"]; ?></option>

                                        <?php } ?>
                                    </select>

                                </div>


                                <div class="auth-submit">
                                    <button type="submit" name="submit" class="btn btn-primary">Insert</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- massage part -->


            <div class="row">
                <div class="col-12">
                    <?php if (isset($_SESSION['student_error'])) :  ?>
                        <div class="alert alert-custom d-flex align-items-center justify-content-center" role="alert">
                            <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">error</i></div>
                            <div class="alert-content">
                                <span class="alert-title text-danger"><span class="m-1"><?php echo $_SESSION['student_error']; ?></span> </span>
                            </div>
                        </div>
                    <?php endif;
                    unset($_SESSION['student_error']); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <?php if (isset($_SESSION['query_error'])) :  ?>
                        <div class="alert alert-custom d-flex align-items-center justify-content-center" role="alert">
                            <div class="custom-alert-icon icon-warning"><i class="material-icons-outlined">warning</i></div>
                            <div class="alert-content">
                                <span class="alert-title text-danger"><span class="m-1"><?php echo $_SESSION['query_error']; ?></span> </span>
                            </div>
                        </div>
                    <?php endif;
                    unset($_SESSION['query_error']); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <?php if (isset($_SESSION['plan_error'])) :  ?>
                        <div class="alert alert-custom d-flex align-items-center justify-content-center" role="alert">
                            <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">error</i></div>
                            <div class="alert-content">
                                <span class="alert-title text-danger"><span class="m-1"><?php echo $_SESSION['plan_error']; ?></span> </span>
                            </div>
                        </div>
                    <?php endif;
                    unset($_SESSION['plan_error']); ?>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <?php if (isset($_SESSION['insert'])) :  ?>
                        <div class="alert alert-custom d-flex align-items-center justify-content-center" role="alert">
                            <div class="custom-alert-icon icon-dark"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title"><span class="m-1"><?php echo $_SESSION['insert']; ?></span> </span>
                            </div>
                        </div>
                    <?php endif;
                    unset($_SESSION['insert']); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <?php if (isset($_SESSION['update'])) :  ?>
                        <div class="alert alert-custom d-flex align-items-center justify-content-center" role="alert">
                            <div class="custom-alert-icon icon-info"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title"><span class="m-1"><?php echo $_SESSION['update']; ?></span> </span>
                            </div>
                        </div>
                    <?php endif;
                    unset($_SESSION['update']); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <?php if (isset($_SESSION['delete'])) :  ?>
                        <div class="alert alert-custom d-flex align-items-center justify-content-center" role="alert">
                            <div class="custom-alert-icon icon-danger"><i class="material-icons-outlined">delete_outline</i></div>
                            <div class="alert-content">
                                <span class="alert-title text-danger"><span class="m-1"><?php echo $_SESSION['delete']; ?></span> </span>
                            </div>
                        </div>
                    <?php endif;
                    unset($_SESSION['delete']); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <?php if (isset($_SESSION['deactive_status'])) :  ?>
                        <div class="alert alert-custom d-flex align-items-center justify-content-center" role="alert">
                            <div class="custom-alert-icon icon-warning"><i class="material-icons-outlined">warning</i></div>
                            <div class="alert-content">
                                <span class="alert-title text-danger"><span class="m-1"><?php echo $_SESSION['deactive_status']; ?></span> </span>
                            </div>
                        </div>
                    <?php endif;
                    unset($_SESSION['deactive_status']); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <?php if (isset($_SESSION['active_status'])) :  ?>
                        <div class="alert alert-custom d-flex align-items-center justify-content-center" role="alert">
                            <div class="custom-alert-icon icon-success"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title text-success"><span class="m-1"><?php echo $_SESSION['active_status']; ?></span> </span>
                            </div>
                        </div>
                    <?php endif;
                    unset($_SESSION['active_status']); ?>
                </div>
            </div>





            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable3" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                    <tr>
                                        <th>S.NO</th>

                                        <th>Students Name</th>
                                        <th>Plan</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>

                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $number = 1;
                                    if (empty($result)):
                                    ?>
                                        <tr>
                                            <th colspan="8" class="text-center text-danger">
                                                No data found!!
                                            </th>
                                        </tr>
                                    <?php
                                    else:
                                        $id = $_SESSION['auth_id'];
                                    ?>

                                        <?php foreach ($subscription as $item) :

                                            $modalId = "centeredModal" . $item['id'];

                                        ?>
                                            <tr>
                                                <td class="text-center"><?= $number++; ?></td>
                                                <td class="text-center"><?= $item['student_name'] ?></td>
                                                <td class="text-center">
                                                    <?php
                                                    if (($item['title'] == 'Basic')) {  ?>
                                                        <button class=" btn btn-info btn-sm ">Basic</button>
                                                    <?php } elseif (($item['title'] == 'Diwali')) {  ?>
                                                        <button class=" btn btn-info btn-sm ">Diwali</button>
                                                    <?php } elseif (($item['title'] == 'Stander')) {  ?>
                                                        <button class=" btn btn-info btn-sm ">Stander</button>
                                                    <?php } else { ?>
                                                        <button class=" btn btn-info btn-sm"> Annual</button>
                                                    <?php } ?>
                                                    <b>$<?= $item['amount'] ?></b>
                                                </td>
                                                <td class="text-center"><?= $item['start_date'] ?></td>
                                                <td class="text-center"><?= $item['end_date'] ?></td>
                                                <td class="text-center">
                                                    <?php
                                                    if (($item['end_date'] > date("Y-m-d"))) {  ?>
                                                        <button class=" btn btn-success btn-sm ">
                                                            Active</button>
                                                    <?php } else { ?>
                                                        <button class=" btn btn-success btn-sm">
                                                            Expired</button>
                                                    <?php } ?>
                                                </td>



                                            </tr>
                                    <?php endforeach;
                                    endif; ?>



                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<?php

include("../master/footer.php");

?>