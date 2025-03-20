<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eloquent CRUD</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <!-- Header -->
        <h2 class="text-center bg-info p-2" style="border-radius: 5px">Eloquent CRUD</h2>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 >All User Data</h4>
            <a class="btn btn-primary" href="{{ route('user.create') }}">Add New</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Table -->
        <table class="table table-striped" style="border: 1px solid; border-radius: 5px">
            <thead>
                <tr style="border: 1px solid;">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Salary</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->

                @php
                    $i = 1;
                @endphp

                @foreach ($users as $user)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $user->user_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->dob }}</td>
                        <td>{{ $user->salary }}</td>
                        <td>
                           <div class="d-flex justify-content-between">
                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-warning">Update</a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" value="{{ $user->id }}">
                                <button class="btn btn-sm btn-danger">Delete</button>
                            </form>
                           </div>

                        </td>
                    </tr>
                @endforeach





            </tbody>
        </table>
        {{ $users->links() }}
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
