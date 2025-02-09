@extends('layout')

@section('title')
    All Users Data
@endsection


@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <button class="btn btn-success btn-add btn-sm"><a href="{{ route("users.create")}}">Add New</a></button>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
                <th>View</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->city_name }}</td>
                <td><button class="btn btn-sm btn-info"><a href="{{ route('users.show', $student->id) }}">View</a></button></td>
                <td>
                    <form action="{{ route('users.destroy', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                    </form>
                </td>

                <td><button class="btn btn-secondary btn-sm"><a href="{{ route('users.edit', $student->id) }}">Update</a></button></td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $students->links() }}
    </div>
</div>

@endsection
