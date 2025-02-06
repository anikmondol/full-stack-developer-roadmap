@extends('layout')

@section('title')
    Add New Users
@endsection


@section('content')
<div class="container mt-5">
    <form>
        <div class="mb-3">
            <label for="userName" class="form-label">User Name</label>
            <input type="text" class="form-control" id="userName">
        </div>
        <div class="mb-3">
            <label for="userEmail" class="form-label">User Email</label>
            <input type="email" class="form-control" id="userEmail">
        </div>
        <div class="mb-3">
            <label for="userAge" class="form-label">User Age</label>
            <input type="number" class="form-control" id="userAge">
        </div>
        <div class="mb-3">
            <label for="userCity" class="form-label">User City</label>
            <input type="text" class="form-control" id="userCity">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection


