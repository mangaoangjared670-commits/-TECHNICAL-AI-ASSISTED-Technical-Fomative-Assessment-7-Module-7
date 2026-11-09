@extends('layouts.app')

@section('content')
    <h1>Edit User Account</h1>

    @if ($errors->any())
        <div>
            <strong>Please fix the following errors:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        method="POST"
        action="{{ route('users.update', $user) }}"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        <div>
            <label for="username">Username</label>
            <input
                type="text"
                id="username"
                name="username"
                value="{{ old('username', $user->username) }}"
            >
        </div>

        <div>
            <label for="full_name">Full Name</label>
            <input
                type="text"
                id="full_name"
                name="full_name"
                value="{{ old('full_name', $user->full_name) }}"
            >
        </div>

        <div>
            <label for="avatar">Profile Picture</label>
            <input
                type="file"
                id="avatar"
                name="avatar"
                accept="image/*"
            >

            <small>Image only. Maximum size: 2 MB.</small>
        </div>

        @if ($user->avatar)
            <div>
                <p>Current Avatar:</p>
                <img
                    src="{{ asset('storage/' . $user->avatar) }}"
                    alt="{{ $user->full_name }}"
                    width="150"
                    height="150"
                >
            </div>
        @endif

        <button type="submit">Update User</button>
    </form>

    <a href="{{ route('users.index') }}">Back to Users</a>
@endsection