<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Savely</title>

    @vite(['resources/js/app.js'])

    <style>
        body {
            background-color: #f5f6fa;
        }

        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, #7F5AF0, #6246EA);
            min-height: 100vh;
        }

        .sidebar .nav-link {
            color: #fff;
            border-radius: 10px;
            padding: 10px 15px;
        }

        .sidebar .nav-link.active {
            background-color: #ffffff;
            color: #6246EA;
            font-weight: 500;
        }

        .navbar-custom {
            background-color: #fff;
            border-radius: 12px;
        }

        .card-custom {
            border-radius: 16px;
            border: none;
        }
    </style>
</head>
<body>

<div class="d-flex">

    {{-- Sidebar --}}
    @include('layouts.sidebar')

    {{-- Main --}}
    <div class="flex-grow-1 p-3">

        {{-- Navbar --}}
        @include('layouts.navbar')

        {{-- Content --}}
        <div class="mt-4">
            @yield('content')
        </div>

    </div>

</div>

</body>
</html>