<?php

include("../master/header.php");


$users_query = "select * FROM users";
$users = mysqli_query($conn, $users_query);
$result = mysqli_fetch_assoc($users);






?>

<!-- content start -->



<div class="app-content">
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h2 class="fw-bold">Dashboard</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php if (isset($_SESSION['temp_name'])) :  ?>
                        <div class="alert alert-custom" role="alert">
                            <div class="custom-alert-icon icon-dark"><i class="material-icons-outlined">done</i></div>
                            <div class="alert-content">
                                <span class="alert-title">Welcome Chief Mr. <span class="m-1"><?php echo $_SESSION['temp_name']; ?></span> </span>
                                <span class="alert-text">Email is <span class="m-1"><?php echo $_SESSION['auth_email']; ?></span> </span>
                            </div>
                        </div>
                    <?php endif;
                    unset($_SESSION['temp_name']); ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-primary">
                                    <i class="material-icons-outlined">paid</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">Today's Sales</span>
                                    <span class="widget-stats-amount">$38,211</span>
                                    <span class="widget-stats-info">471 Orders Total</span>
                                </div>
                                <div class="widget-stats-indicator widget-stats-indicator-negative align-self-start">
                                    <i class="material-icons">keyboard_arrow_down</i> 4%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-warning">
                                    <i class="material-icons-outlined">person</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">Active Users</span>
                                    <span class="widget-stats-amount">23,491</span>
                                    <span class="widget-stats-info">790 unique this month</span>
                                </div>
                                <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                    <i class="material-icons">keyboard_arrow_up</i> 12%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-danger">
                                    <i class="material-icons-outlined">file_download</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">Downloads</span>
                                    <span class="widget-stats-amount">140,390</span>
                                    <span class="widget-stats-info">87 items downloaded</span>
                                </div>
                                <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                    <i class="material-icons">keyboard_arrow_up</i> 7%
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Registered On</th>
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

                                        <?php foreach ($users as $item) :

                                            $modalId = "centeredModal" . $item['id'];

                                        ?>
                                            <tr>
                                                <td class="text-center"><?= $number++; ?></td>
                                                <td class="text-center"><?= $item['name'] ?></td>
                                                <td class="text-center"><?= $item['email'] ?></td>
                                                <td class="text-center"><?= date("d-m-Y h:i:s A", strtotime($item["created_at"])); ?></td>
                                                <td class="text-center">
                                                    <?php
                                                    if (($item['status'] == 'deactive')) {  ?>
                                                        <button class=" btn btn-warning btn-sm ">
                                                            <i class="material-icons">notifications_off</i> Deactive</button>
                                                    <?php } else { ?>
                                                        <button class=" btn btn-success btn-sm">
                                                            <i class="material-icons">notifications</i> Active</button>
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