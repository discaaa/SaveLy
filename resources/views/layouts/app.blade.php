<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Savely</title>

    @vite(['resources/js/app.js'])

    <style>
        body {
            background-color: #f4f5fb;
        }

        .main-wrapper {
            min-height: 100vh;
        }

        .content-wrapper {
            background: #ffffff;
            border-radius: 20px;
            padding: 28px;
            margin-top: 20px;
        }
        .sidebar {
    width: 250px;
    background: linear-gradient(180deg, #8B5CF6, #6D28D9);
    min-height: 100vh;
}

/* menu */
.sidebar .nav-link {
    color: #fff;
    border-radius: 12px;
    padding: 10px 15px;
    font-weight: 500;
}
    /* hover */
    .sidebar .nav-link:hover {
        background: rgba(255,255,255,0.15);
    }

    .sidebar .nav-link.active {
        background-color: #fff;
        color: #6D28D9;
    }
    </style>
</head>
<body>

<div class="d-flex">

    <!-- sidebar -->
    @include('components.sidebar')

    <div class="flex-grow-1 p-4 main-wrapper">

        <!-- navbar -->
        @include('components.navbar')

        <!-- content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

    </div>

</div>

</body>
</html>