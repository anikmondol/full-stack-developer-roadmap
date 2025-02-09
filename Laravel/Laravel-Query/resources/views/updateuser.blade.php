@extends('layout')

@section('title')
    Add New Users
@endsection


@section('content')
    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('users.index') }}">
            <button class="btn btn-back btn-sm">Back</button>
        </a>
        <form action="{{ route('users.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')  <!-- Include PUT method since you are updating the resource -->

            <div class="mb-3">
                <label for="userName" class="form-label">User Name</label>
                <input name="userName" type="text" class="form-control @error('userName') is-invalid @enderror"
                    id="userName" value="{{ old('userName', $student->name ?? '') }}">
                @error('userName')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="userEmail" class="form-label">User Email</label>
                <input name="userEmail" type="email" class="form-control @error('userEmail') is-invalid @enderror"
                    id="userEmail" value="{{ old('userEmail', $student->email ?? '') }}">
                @error('userEmail')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="userAge" class="form-label">User Age</label>
                <input name="userAge" type="number" class="form-control @error('userAge') is-invalid @enderror"
                    id="userAge" value="{{ old('userAge', $student->age ?? '') }}">
                @error('userAge')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="citySelect" class="form-label">User City</label>
                <select name="userCity" id="citySelect" class="form-control @error('userCity') is-invalid @enderror">
                    <option value="1" {{ old('userCity', $student->city) == 1 ? 'selected' : '' }}>Delhi</option>
                    <option value="2" {{ old('userCity', $student->city) == 2 ? 'selected' : '' }}>Mumbai</option>
                    <option value="3" {{ old('userCity', $student->city) == 3 ? 'selected' : '' }}>Goa</option>
                    <option value="4" {{ old('userCity', $student->city) == 4 ? 'selected' : '' }}>Pune</option>
                    <option value="5" {{ old('userCity', $student->city) == 5 ? 'selected' : '' }}>Agra</option>
                </select>
                @error('userCity')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success btn-sm">Save</button>
        </form>



    </div>
@endsection
