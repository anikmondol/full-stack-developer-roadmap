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
        .table td, .table th {
            vertical-align: middle;
        }
        .btn-back {
            background-color: #d9534f;
            color: white;
        }
        .btn-back:hover {
            background-color: #242020;
            color: white;
        }
        a{
            color: white;
            text-decoration: none
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Eloquent CRUD</h1>
    </div>
    <div class="sub-header text-center">
        @yield('title')
    </div>
    @yield('content')

</body>
</html>
