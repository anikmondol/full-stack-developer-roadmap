<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FileUpload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-2">File Upload</h2>
            </div>
        </div>
        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="col-12">
                <input type="file" name="photo" accept=".png,.jpg,.jpeg">
                @error('photo')
                    <div class="alert alert-danger my-1">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <input type="submit" class="btn btn-sm btn-primary">
            </div>
        </form>

        <div class="row">
            <div class="col-6">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            @foreach ($users as $user)
                <div class="col-2">
                    <img class="img-thumbnail img-fluid" src="{{ asset('/storage/'. $user->file_name) }}" alt="">

                   <div class="d-flex justify-content-between mt-2">
                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>

                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">Update</a>
                   </div>

                </div>
            @endforeach
        </div>


    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
