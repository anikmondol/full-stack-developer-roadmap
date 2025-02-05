<html>
<head>
    <title>Eloquent CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #dff0d8;
            padding: 20px;
            text-align: center;
        }
        .sub-header {
            background-color: #fcf8e3;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
        }
        .btn-add {
            margin: 10px 0;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-view {
            background-color: #007bff;
            color: white;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
        }
        .btn-update {
            background-color: #ffc107;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Eloquent CRUD</h1>
    </div>
    <div class="sub-header text-center">
        All Users Data
    </div>
    <div class="container">
        <button class="btn btn-success btn-add">Add New</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>View</th>
                    <th>Delete</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->loop }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->city_name }}</td>
                    <td><button class="btn btn-sm btn-info">View</button></td>
                    <td><button class="btn btn-sm btn-danger">Delete</button></td>
                    <td><button class="btn btn-secondary">Update</button></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>
</html>
