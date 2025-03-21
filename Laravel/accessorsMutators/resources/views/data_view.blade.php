<x-layout>

    <x-slot:title>
        Single User
    </x-slot:title>

    <table class="table">
        <tbody>
            <tr>
                <th>Name :</th>
                <td>{{ $user->user_name }}</td>
            </tr>
            <tr>
                <th>Email :</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th>Salary :</th>
                <td>{{ $user->salary }}</td>
            </tr>
            <tr>
                <th>Death Of Birth :</th>
                <td>{{ $user->dob }}</td>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route('user.index') }}" class="btn-back text-decoration-none">Back</a>
</x-layout>
