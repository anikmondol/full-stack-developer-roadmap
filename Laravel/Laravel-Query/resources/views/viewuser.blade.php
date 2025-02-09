@extends('layout')

@section('title')
    All Users Data
@endsection


@section('content')
    <div class="container mt-5">
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">Name :</th>
                    <td>{{ $student->name }}</td>
                </tr>
                <tr>
                    <th scope="row">Email :</th>
                    <td>{{ $student->email }}</td>
                </tr>
                <tr>
                    <th scope="row">Age :</th>
                    <td>{{ $student->age }}</td>
                </tr>
                <tr>
                    <th scope="row">City :</th>
                    <td>{{ $city->city ?? 'Not Assigned' }}</td>
                </tr>
            </tbody>

        </table>
        <a href="{{ route('users.index') }}">
            <button class="btn btn-back btn-sm">Back</button>
        </a>
    </div>
@endsection
