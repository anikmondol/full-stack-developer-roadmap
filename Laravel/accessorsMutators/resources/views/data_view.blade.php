<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header {
            background-color: #d1e7dd;
            padding: 10px;
            text-align: center;
        }
        .sub-header {
            background-color: #fff3cd;
            padding: 5px;
            text-align: left;
            font-weight: bold;
        }
        .user-detail {
            margin: 20px auto;
            width: 50%;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 20px;
        }
        .user-detail table {
            width: 100%;
        }
        .user-detail th {
            text-align: left;
            width: 20%;
        }
        .user-detail td {
            width: 80%;
        }
        .btn-back {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>CRUD with Component</h2>
    </div>
    <div class="sub-header text-center">
        User Detail
    </div>
    <div class="user-detail">
        <table class="table">
            <tbody>
                <tr>
                    <th>Name :</th>
                    <td>{{ $user->user_name }}</td>
                </tr>
                <tr>
                    <th>Email :</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Salary :</th>
                    <td>{{ $user->salary }}</td>
                </tr>
                <tr>
                    <th>Death Of Birth :</th>
                    <td>{{ $user->dob }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('user.index') }}" class="btn-back text-decoration-none">Back</a>
    </div>
</body>
</html>
