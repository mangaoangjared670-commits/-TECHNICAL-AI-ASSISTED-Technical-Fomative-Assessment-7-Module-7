<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myproj77</title>
</head>
<body>
    <nav>
        <a href="{{ route('customers.index') }}">Customers</a>
        <a href="{{ route('users.index') }}">Users</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>