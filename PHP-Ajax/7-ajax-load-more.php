<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & Ajax Load More Pagination</title>
    <script src="js/jquery.js"></script>
    <style>
        /* style.css */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
            width: 80%;
            max-width: 600px;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        h1 {
            background-color: #6c63ff;
            color: white;
            padding: 10px;
            font-size: 20px;
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        thead {
            background-color: #f06292;
            color: white;
        }

        thead th {
            padding: 10px;
            text-align: left;
        }

        tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        tbody tr:nth-child(even) {
            background-color: #fff;
        }

        tbody td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        .load-more {
            padding: 10px 20px;
            background-color: #6c63ff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .load-more:hover {
            background-color: #574dcf;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>PHP & Ajax Load More Pagination</h1>

        <div>
            <table id="table-data">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                    </tr>
                </thead>


            </table>
        </div>



    </div>

    <script>
        $(document).ready(function() {
            function loadTable(page) {

                // $.ajax({
                //     url: "ajax-load-more.php",
                //     type: "post",
                //     data: {
                //         f_name: page,
                //     },
                //     success: function(data) {

                //         $("#table-data").append(data);

                //     }
                // })

                $.ajax({
                    url: "ajax-load-more.php",
                    type: "post",
                    data: { page_no: page },
                    success: function(data) {

                        $("#table-data").append(data);

                    }
                })


            }

            loadTable();

            $(document).on("click", "#ajaxbtn", function() {
                var page = $(this).data('aid');


                loadTable(page);
            })


           

        });
    </script>


</body>

</html>