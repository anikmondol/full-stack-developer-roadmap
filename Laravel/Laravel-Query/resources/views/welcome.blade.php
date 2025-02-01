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

                <form method="POST">
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
