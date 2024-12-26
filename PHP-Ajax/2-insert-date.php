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
        .container h1 {
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
    </style>

    <script src="js/jquery.js"></script>

</head>

<body>
    <div class="container">
        <h1>PHP with Ajax</h1>
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
        <table id="table-date">

        </table>

        <h4 style="color: red;" id="error-message"></h4>
        <h4 style="color: green;" id="success-message"></h4>

    </div>


    <script>
        $(document).ready(function() {

            function loadTable() {

                $.ajax({
                    url: "ajax-load.php",
                    type: "post",
                    success: function(date) {
                        $("#table-date").html(date);
                    }
                })

            }

            loadTable();

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
                        success: function(date) {


                            if (date == 1) {
                                loadTable();
                                $("#addForm").trigger("reset");
                                $("#success-message").html("save date success").slideDown();
                                $("#error-message").slideUp();
                            } else {
                                $("#error-message").html("no save date").slideDown();
                                $("#success-message").slideUp();
                            }


                        }
                    })
                }

            })

        });
    </script>

</body>

</html>