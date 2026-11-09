@extends('layouts.app')

@section('content')
    <h1>User Accounts</h1>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('users.create') }}">Add User</a>

    <table border="1" cellpadding="8">
        <thead>
            <tr>
                <th>Avatar</th>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>
                        @if ($user->avatar)
                            <img
                                src="{{ asset('storage/' . $user->avatar) }}"
                                alt="{{ $user->full_name }}"
                                width="80"
                                height="80"
                            >
                        @else
                            <img
                                src="{{ asset('images/default-avatar.png') }}"
                                alt="Default avatar"
                                width="80"
                                height="80"
                            >
                        @endif
                    </td>

                    <td>{{ $user->id }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>

                    <td>
                        <a href="{{ route('users.edit', $user) }}">
                            Edit
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection