@extends('layout')

@section('title')
    All Users Data
@endsection


@section('content')
<div class="container">
    <button class="btn btn-success btn-add"><a href="{{ route("users.create")}}">Add New</a></button>
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
                <td>{{ $student->loop }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->city_name }}</td>
                <td><button class="btn btn-sm btn-info"><a href="{{ route('users.show', $student->id) }}">View</a></button></td>
                <td><button class="btn btn-sm btn-danger">Delete</button></td>
                <td><button class="btn btn-secondary"><a href="{{ route('users.edit', $student->id) }}">Update</a></button></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
