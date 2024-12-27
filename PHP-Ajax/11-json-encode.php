<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with Ajax</title>
    <script src="js/jquery.js"></script>
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
</head>

<body>
    <div class="container">
        <h1>PHP with Ajax</h1>

        <table id="table-date">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody id="dataTable">
                <!-- Dynamic rows will be appended here -->
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {

            $.ajax({
                url: "json-encode.php", // Server endpoint
                type: "post",
                dataType: "json", // Expected data type
                success: function(data) {
                    $.each(data, function(key, value) {

                        $("#dataTable").append(`<tr>
                    <td>${value.id}</td>
                    <td>${value.name}</td>
                    <td>${value.age}</td>
                    <td>${value.percentage}</td>
                </tr>`);
                    });
                },

            });
        });
    </script>
</body>

</html>