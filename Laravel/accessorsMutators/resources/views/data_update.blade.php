<x-layout>

    <x-slot:title>
        Edit  User
    </x-slot:title>

    <!-- Form -->
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- User Name -->
        <div class="mb-3">
            <label for="userName" class="form-label">User Name</label>
            <input name="user_name" type="text" class="form-control @error('user_name') is-invalid @enderror"
                id="userName" placeholder="Enter user name" value="{{ old('user_name', $user->user_name) }}">
            @error('user_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- User Email -->
        <div class="mb-3">
            <label for="userEmail" class="form-label">User Email</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                id="userEmail" placeholder="Enter user email" value="{{ old('email', $user->email) }}">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- User Salary -->
        <div class="mb-3">
            <label for="userSalary" class="form-label">User Salary</label>
            <input name="salary" type="text" class="form-control @error('salary') is-invalid @enderror"
                id="userSalary" placeholder="Enter user salary" value="{{ $user->salary, old('salary') }}">
            @error('salary')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- User DOB -->
        <div class="mb-3">
            <label for="userDOB" class="form-label">User DOB</label>
            <input name="dob" type="date" class="form-control @error('dob') is-invalid @enderror" id="userDOB"
                value="{{ $user->dob ? date('Y-m-d', strtotime($user->dob)) : old('dob') }}">
            @error('dob')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>



        <!-- Update Button -->
        <button type="submit" class="btn btn-success">Update</button>
        <a class="btn btn-warning" href="{{ route('user.index') }}">Back Home</a>
    </form>
</x-layout>
