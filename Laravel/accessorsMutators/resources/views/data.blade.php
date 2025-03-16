<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <h1 class="mb-4">Add New User</h1>

        <!-- Form -->
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <!-- User Name -->
            <div class="mb-3">
                <label for="userName" class="form-label">User Name</label>
                <input name="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror" id="userName" placeholder="Enter user name" value="{{ old('user_name') }}">
                @error('user_name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- User Email -->
            <div class="mb-3">
                <label for="userEmail" class="form-label">User Email</label>
                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="userEmail" placeholder="Enter user email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- User Salary -->
            <div class="mb-3">
                <label for="userSalary" class="form-label">User Salary</label>
                <input name="salary" type="number" class="form-control @error('salary') is-invalid @enderror" id="userSalary" placeholder="Enter user salary" value="{{ old('salary') }}">
                @error('salary')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- User DOB -->
            <div class="mb-3">
                <label for="userDOB" class="form-label">User DOB</label>
                <input name="dob" type="date" class="form-control @error('dob') is-invalid @enderror" id="userDOB" value="{{ old('dob') }}">
                @error('dob')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- User Password -->
            <div class="mb-3">
                <label for="userPassword" class="form-label">User Password</label>
                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="userPassword" placeholder="Enter user password">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Save Button -->
            <button type="submit" class="btn btn-primary">Save</button>
            <a class="btn btn-warning" href="{{ route('user.index') }}">Back Home</a>
        </form>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
