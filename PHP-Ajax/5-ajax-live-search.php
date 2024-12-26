<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with Ajax</title>
    <style>
        /* General Reset */
        body,
        h1,
        table {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Container Styling */
        .container {
            background-color: #e6ffe6;
            border: 1px solid #ccc;
            width: 60%;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Header Styling */
        .container h2 {
            background-color: #ffc107;
            color: white;
            padding: 10px 0;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        /* Button Styling */
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table th,
        table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #007bff;
            color: white;
        }

        table td {
            color: #333;
        }

        .delete {
            background-color: red !important;
        }

        #modal {
            background-color: rgba(0, 0, 0, 0.7);
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 100;
            display: none;
        }


        #modal-form {
            background-color: #fff;
            width: 35%;
            position: relative;
            top: 40%;
            left: calc(50%-15%);
            padding: 25px;
            right: -35%;
            border-radius: 4px;
        }

        #modal-form table td {
            border: 0px solid #ddd;
        }

        #close-bth {
            background-color: red;
            color: white;
            width: 30px;
            height: 30px;
            text-align: center;
            border-radius: 50%;
            position: absolute;
            top: -15px;
            right: -15px;
            padding-top: 3px;
            cursor: pointer;
        }

        .search_term{
            margin-bottom: 10px;

        }

    </style>

    <script src="js/jquery.js"></script>

</head>

<body>
    <div class="container">
        <div class="search_term">
            <label>Search Now</label>
            <input type="text" id="search" autocomplete="off">
        </div>

        <form action="" id="addForm">
            <div>
                <label>first name</label>
                <input type="text" id="fname">
            </div>
            <br>
            <div>
                <label>last name</label>
                <input type="text" id="lname">
            </div>
            <br>
            <button id="save">save</button>
        </form>
        <table id="table-data">

        </table>

        <h4 style="color: red;" id="error-message"></h4>
        <h4 style="color: green;" id="success-message"></h4>

        <div id="modal">
            <div id="modal-form">
                <h3>Edit Form</h3>
                <table cellpadding="0" width="100%">

                </table>
                <div id="close-bth">X</div>
            </div>
        </div>

    </div>


    <script>
        $(document).ready(function() {


            // load table records
            function loadTable() {

                $.ajax({
                    url: "ajax-load.php",
                    type: "post",
                    success: function(data) {
                        $("#table-data").html(data);
                    }
                });

            }


            // load new records
            $("#save").on("click", function(e) {
                e.preventDefault();
                var fname = $("#fname").val();
                var lname = $("#lname").val();

                if (fname == "" || lname == "") {
                    $("#error-message").html("all fields are required").slideDown();
                    $("#success-message").slideUp();
                } else {
                    $.ajax({
                        url: "ajax-inset.php",
                        type: "post",
                        data: {
                            f_name: fname,
                            l_name: lname
                        },
                        success: function(data) {


                            if (data == 1) {
                                loadTable();
                                $("#addForm").trigger("reset");
                                $("#success-message").html("save data success").slideDown();
                                $("#error-message").slideUp();
                            } else {
                                $("#error-message").html("no save data").slideDown();
                                $("#success-message").slideUp();
                            }


                        }
                    });
                }


            });


            // delete records
            $(document).on("click", ".delete", function() {

                if (confirm("delete this date")) {



                    var userId = $(this).data("id");
                    var element = this;

                    $.ajax({
                        url: "ajax-delete.php",
                        type: "post",
                        data: {
                            id: userId
                        },
                        success: function(data) {

                            if (data == 1) {
                                $(element).closest("tr").fadeOut();
                            } else {
                                $("#error-message").html("no deleted").slideDown();
                                $("#success-message").slideUp();
                            }

                        }
                    });
                }

            });

            // show modal
            $(document).on("click", ".edit", function() {

                $("#modal").show();

                var studentId = $(this).data("eid");

                $.ajax({
                    url: "load-update-form.php",
                    type: "post",
                    data: {
                        id: studentId
                    },
                    success: function(data) {
                        $("#modal-form table").html(data);
                    }
                });

            });

            // modal hidden
            $("#close-bth").on("click", function(e) {

                $("#modal").hide();

            });


            // update
            $(document).on("click", "#edit-submit", function() {


                var id = $("#hidden").val();
                var fname = $("#edit-fname").val();
                var lname = $("#edit-lname").val();


                $.ajax({
                    url: "load-save-update-form.php",
                    type: "post",
                    data: {
                        id: id,
                        fname: fname,
                        lname: lname
                    },
                    success: function(data) {
                        loadTable();
                        $("#modal").hide();
                    }
                });

            });


            // live Search

            $("#search").on("keyup", function(e) {

                var search_term = $(this).val();

                $.ajax({
                    url: "ajax-live-search.php",
                    type: "post",
                    data: {
                        search_term: search_term,
                    },
                    success: function(data) {
                        $("#table-data").html(data);
                    }
                });

            });


            loadTable();



        });
    </script>

</body>

</html>