<?php

include("../master/header.php");

// students query

$students_query = "select * FROM students";
$students = mysqli_query($conn, $students_query);


$total_students = [];

if ($students->num_rows > 0) {
    while ($row = $students->fetch_assoc()) {
        $total_students[] = $row['id'];
    }
}

// books query

$books_query = "select * FROM books";
$books = mysqli_query($conn, $books_query);


$total_books = [];

if ($books->num_rows > 0) {
    while ($row = $books->fetch_assoc()) {
        $total_books[] = $row['id'];
    }
}


// books loans query

$loans_query = "select * FROM books_loans";
$loans = mysqli_query($conn, $loans_query);


$total_loans = [];

if ($loans->num_rows > 0) {
    while ($row = $loans->fetch_assoc()) {
        $total_loans[] = $row['id'];
    }
}


// books loans query

$loans_query = "select * FROM subscription_plans";
$loans_sum = mysqli_query($conn, $loans_query);


$total_revenue = 0;

if ($loans_sum->num_rows > 0) {
    while ($row = $loans_sum->fetch_assoc()) {
        $total_revenue += $row['amount'];
    }
}



$loans_books_query = "select l.*, b.title as book_title, s.name as student_name 
        from books_loans l
        inner join books b on b.id = l.book_id
        inner join students s on s.id = l.student_id
        order by l.id desc";
$d = mysqli_query($conn, $loans_books_query);


$subscription_query = "SELECT subscription_plans.*,s.name as student_name, s.status as status, m.start_date as start_date, m.end_date as end_date FROM `subscription_plans` INNER JOIN students s  ON s.id = subscription_plans.id inner join membership m on m.payments_id = subscription_plans.duration";
$subscription = mysqli_query($conn, $subscription_query);



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

                <div class="col-xl-3">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-warning">
                                    <i class="material-icons-outlined">person</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">Active Students</span>
                                    <span class="widget-stats-amount"><?= count($total_students) ?></span>
                                    <span class="widget-stats-info"><a href="../students/students.php">View More</a></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-danger">
                                    <i class="material-icons-outlined">menu_book</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">Total Books</span>
                                    <span class="widget-stats-amount"><?= count($total_books) ?></span>
                                    <span class="widget-stats-info"><a href="../books/books.php">View More</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-primary">
                                    <i class="material-icons-outlined">paid</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">Total Revenue</span>
                                    <span class="widget-stats-amount">$<?= $total_revenue ?></span>
                                    <span class="widget-stats-info"><a href="../subscriptions/subscriptions.php">View More</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card widget widget-stats">
                        <div class="card-body">
                            <div class="widget-stats-container d-flex">
                                <div class="widget-stats-icon widget-stats-icon-danger">
                                    <i class="material-icons-outlined">real_estate_agent</i>
                                </div>
                                <div class="widget-stats-content flex-fill">
                                    <span class="widget-stats-title">Total Books Loan</span>
                                    <span class="widget-stats-amount"><?= count($total_loans) ?></span>
                                    <span class="widget-stats-info"><a href="../loans/loans.php">View More</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic</h5>
                    </div>
                    <div class="card-body">
                        <div class="example-container">
                            <div class="example-content">
                                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">New Students</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Recant Loans</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Recant Subscriptions</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
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

                                                    <?php foreach ($students as $item) :

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
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <table id="datatable4" class="display nowrap" style="width:100%">
                                            <thead>
                                                <tr>
                                                <tr>
                                                    <th>S.NO</th>
                                                    <th>Books Name</th>
                                                    <th>Students Name</th>
                                                    <th>Loan Date</th>
                                                    <th>Return Date</th>
                                                    <th>Status</th>
                                                    <th>Registered On</th>

                                                    <th>Action</th>
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

                                                    <?php foreach ($d as $item) :

                                                        $modalId = "centeredModal" . $item['id'];

                                                    ?>
                                                        <tr>
                                                            <td class="text-center"><?= $number++; ?></td>
                                                            <td class="text-center"><?= $item['book_title'] ?></td>
                                                            <td class="text-center"><?= $item['student_name'] ?></td>
                                                            <td class="text-center"><?= $item['loan_date'] ?></td>
                                                            <td class="text-center"><?= $item['return_date'] ?></td>
                                                            <td class="text-center">
                                                                <?php
                                                                if (($item['status'] == 'deactive')) {  ?>
                                                                    <button class=" btn btn-warning btn-sm ">
                                                                        <i class="material-icons">notifications_off</i> No Returned</button>
                                                                <?php } else { ?>
                                                                    <button class=" btn btn-success btn-sm">
                                                                        <i class="material-icons">notifications</i> Returned</button>
                                                                <?php } ?>
                                                            </td>
                                                            <td class="text-center"><?= date("d-m-Y h:i:s A", strtotime($item["created_at"])); ?></td>
                                                            <td class="text-center"><span class="material-icons-two-tone" data-bs-toggle="modal" data-bs-target="#<?= $modalId; ?>"> more_vert </span></td>

                                                            <!-- Vertically centered modal with dynamic modal ID -->
                                                            <div class="modal fade" id="<?= $modalId; ?>" tabindex="-1" aria-labelledby="<?= $modalId; ?>Label" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h6 class="modal-title" id="<?= $modalId; ?>Label">Edit / Delete</h6>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 10px;"></button>
                                                                        </div>
                                                                        <div class="modal-body mx-auto">
                                                                            <a href="edit.php?editId=<?= $item["id"] ?>"><button type="button" class="btn btn-info btn-sm"><i class="material-icons">edit</i> Edit</button></a>
                                                                            <a onclick="return confirm('Are you sure?');" href="store.php?deleteId=<?= $item["id"] ?>"><button type="button" class="btn btn-danger btn-sm"><i class="material-icons">delete_outline</i> Delete</button></a>
                                                                            <?php
                                                                            if (($item['status'] == 'deactive')) {  ?>
                                                                                <a href="store.php?status_id=<?= $item['id'] ?>">
                                                                                    <button class=" btn btn-success btn-sm">
                                                                                        <i class="material-icons">notifications</i> Returned</button>
                                                                                </a>
                                                                            <?php } else { ?>
                                                                                <a href="store.php?status_id=<?= $item['id'] ?>"> <button class=" btn btn-warning btn-sm ">
                                                                                        <i class="material-icons">notifications_off</i> No Returned</button>
                                                                                </a>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </tr>
                                                <?php endforeach;
                                                endif; ?>



                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <table id="datatable1" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                    
                                        <th>S.NO</th>

                                        <th>Students Name</th>
                                        <th>Plan</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>

                                    
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


        </div>
    </div>
</div>


<?php

include("../master/footer.php");

?>