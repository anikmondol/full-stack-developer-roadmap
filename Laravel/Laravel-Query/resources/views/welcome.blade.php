<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Students Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <h2>Add New Students</h2>

                <form action="{{ route('addStudent') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter your name">
                        <span class="text-danger">
                            @error('name') {{ $message }} @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email">
                        <span class="text-danger">
                            @error('email') {{ $message }} @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password">
                            <button class="btn btn-outline-secondary" type="button" onclick="togglePassword()">👁️</button>
                        </div>
                        <span class="text-danger">
                            @error('password') {{ $message }} @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input value="{{ old('age') }}" type="number" class="form-control @error('age') is-invalid @enderror" name="age" placeholder="Enter your age">
                        <span class="text-danger">
                            @error('age') {{ $message }} @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select City</label>
                        <select class="form-select" name="city">
                            @php
                                $cities = ["New York", "London", "Tokyo", "Paris", "Berlin", "Sydney", "Dubai", "Toronto", "Mumbai", "Singapore"];
                                $randomCities = collect($cities)->shuffle()->take(4);
                            @endphp
                            @foreach ($randomCities as $city)
                                <option value="{{ $city }}" {{ old('city') == $city ? 'selected' : '' }}>{{ $city }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">
                            @error('city') {{ $message }} @enderror
                        </span>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>



            </div>
        </div>
    </div>





    <script>
        function togglePassword() {
            var passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
