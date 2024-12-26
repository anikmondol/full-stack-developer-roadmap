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
        <button id="loadDataBtn">Load Data</button>
        <table id="table-date">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody id="dataTable">
                <tr>
                    <td>1</td>
                    <td>Yahoo Baba</td>
                </tr>
            </tbody>
        </table>
    </div>


    <script>
        $(document).ready(function(){

            $("#loadDataBtn").on("click", function(e){

                $.ajax({
                    url: "ajax-load.php",
                    type: "post",
                    success : function(date){
                        $("#table-date").html(date);
                    }
                })

            });


        });
    </script>

</body>

</html>