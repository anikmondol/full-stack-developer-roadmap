<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto">
                <h2>All Students</h2>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a href="/new_Student" class="btn btn-sm btn-success my-2">Add New</a>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>name</th>
                            <th>Email</th>
                            <th>Age</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                    </thead>



                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->city }}</td>
                            <td>
                                <a href="{{ route('singleStudent', $student->id) }}"><button
                                        class="btn btn-sm btn-info">View</button></a>
                                <a href="{{ route('deleteStudent', $student->id) }}"><button
                                        class="btn btn-sm btn-danger">Delete</button></a>
                                <a href="{{ route('edit', $student->id) }}"><button class="btn btn-sm btn-warning">Update</button></a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
