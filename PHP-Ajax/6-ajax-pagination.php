<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & Ajax Pagination</title>
    <script src="js/jquery.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        .container {
            width: 80%;
            margin: 50px auto;
            text-align: center;
        }

        h1 {
            background-color: #007bff;
            color: white;
            padding: 10px 0;
            margin: 0;
            border-radius: 5px 5px 0 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #28a745;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #pagination {
            margin-top: 20px !important;
        }

        #pagination a {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 5px 10px;
            margin: 0 2px;
            cursor: pointer;
            border-radius: 3px;
            text-decoration: none;
        }

        .active {
            background-color: #28a745 !important;
        }

        #pagination a:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>PHP & Ajax Pagination</h1>
        <div class="table-data">


        </div>
    </div>


    <script>
        $(document).ready(function() {

            function loadTable(page) {

                $.ajax({
                    url: "ajax-pagination.php",
                    type: "post",
                    data: {
                        page_no: page
                    },
                    success: function(data) {

                        $(".table-data").html(data);

                    }
                })

            }


            loadTable();



            // pagination code

            $(document).on("click", "#pagination a", function(e) {
                e.preventDefault();

                var page_id = $(this).attr("id");

                loadTable(page_id);



            })


        });
    </script>


</body>

</html>