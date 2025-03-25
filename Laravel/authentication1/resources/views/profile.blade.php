<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .profile-card {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
        }
        .profile-card h3 {
            margin-bottom: 20px;
        }
        .profile-card .form-control {
            border: none;
            border-bottom: 1px solid #ddd;
            border-radius: 0;
            margin-bottom: 10px;
        }
        .profile-card .btn-back {
            background-color: #6c757d;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <h3>Profile</h3>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name" readonly value="{{ $user->name }}">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" readonly value="{{ $user->email }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Age" readonly value="{{ $user->age }}">
        </div>
        <a class="btn btn-dark" href="{{ route('dashboardPage') }}">Back</a>

    </div>
</body>
</html>
