<x-layout>

    <x-slot:title>
        All User
    </x-slot:title>



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
    <div class="d-flex gap-3"><span> {{ $users->links() }}</span>
        <a style="width: 200px;" class="btn btn-primary" href="{{ route('user.create') }}">Add New</a>

    </div>
</x-layout>
