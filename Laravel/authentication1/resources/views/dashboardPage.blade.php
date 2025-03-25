<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center ">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center">Welcome, {{ Auth::user()->name }}</h3>
                    </div>
                    <div class="card-body text-center">

                        {{-- @if (Gate::allows('isAdmin'))
                        <a href="{{ route('innerPage') }}"> <button type="submit"
                            class="btn btn-primary">Admin Panel</button></a>
                        @else
                            <span>none</span>
                        @endif --}}

                            @can('isAdmin')
                            <a href="{{ route('innerPage') }}"> <button type="submit"
                                class="btn btn-primary">Admin Panel</button></a>
                            </a>
                            @else
                            <a href="#"> <button type="submit"
                                class="btn btn-primary">Other Link</button></a>
                            @endcan


                        <span>|</span>
                        <a href="{{ route('logout') }}">
                            <button type="button" class="btn btn-danger">logout</button>
                        </a>
                        <span>|</span>
                        <a href="{{ route('profile', Auth::id()) }}">
                            <button type="button" class="btn btn-warning">Profile</button>
                        </a>
                        <span>|</span>
                        <a href="{{ route('post', Auth::id()) }}">
                            <button type="button" class="btn btn-dark">Post</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
