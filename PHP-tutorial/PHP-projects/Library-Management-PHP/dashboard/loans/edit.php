<?php

include("../master/header.php");


$students_query = "select * FROM students";
$students = mysqli_query($conn, $students_query);
$result1 = mysqli_fetch_assoc($students);


$books_query = "SELECT id, title FROM `books`";
$books = mysqli_query($conn, $books_query);
$result2 = mysqli_fetch_assoc($books);


if (isset($_REQUEST["editId"])) {

    $id = $_REQUEST['editId'];


    $books_query = "SELECT l.*, b.title AS book_title, s.name AS student_name 
FROM books_loans l
INNER JOIN books b ON b.id = l.book_id
INNER JOIN students s ON s.id = l.student_id
WHERE l.id = $id";



    $book = mysqli_query($conn, $books_query);
    $result3 = mysqli_fetch_assoc($book);
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
                                    <label for="signUpUserCategory" class="form-label">Students</label>
                                    <select name="student" id="" class="form-control">
                                        <option value="">Please Select</option>

                                        <?php
                                        foreach ($students as  $value) {
                                        ?>



                                            <option <?= $value["id"] == $result3['student_id'] ? 'selected' : ""; ?> value="<?= $value["id"]; ?>"><?= $value["name"]; ?></option>

                                        <?php } ?>
                                    </select>

                                </div>



                                <div class="col-md-6">
                                    <label for="signUpUserCategory" class="form-label">Book</label>
                                    <select name="book" id="" class="form-control">
                                        <option value="">Please Select</option>

                                        <?php
                                        foreach ($books as  $item) {
                                        ?>

                                            <option <?= $item["id"] == $result3['book_id'] ? 'selected' : ""; ?> value="<?= $item["id"]; ?>"><?= $item["title"]; ?></option>

                                        <?php } ?>
                                    </select>


                                </div>


                                <div class="col-md-6">

                                    <label class="form-label">Loan Date</label>
                                    <input value="<?= $result3["loan_date"]; ?>" type="date" class="form-control" name="loan_date" />


                                </div>

                                <div class="col-md-6">

                                    <label class="form-label">Return/Due Date</label>
                                    <input value="<?= $result3["return_date"]; ?>" type="date" class="form-control" name="return_date" />

                                </div>


                                <div class="auth-submit">
                                    <button type="submit" name="edit_btn" class="btn btn-primary">Insert</button>
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