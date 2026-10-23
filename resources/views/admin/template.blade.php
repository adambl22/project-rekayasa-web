<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.8-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.3.8-dist/js/bootstrap.bundle.min.js') }}"></script>

</head>
<style>
    body {
        background-color: ;
    }
    .admin-sidebar {
        
    }
    </style>
<body>
    <div class="admin-sidebar shadow">
        <h4 class="text-center fw-bold text-white pb-3 border-bottom border-secondary">Admin Panel</h4>
        <ul class="nav flex-column mt-3">
            <li class="nav-item">
                <a href="{{ route('admin.home')}}" class="nav-link text-white">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link text-white">Project</a>
            </li>
        </ul>
    </div>
    <div class="admin-content">
        <div class="d-flex justify-content-between align-items-center pb-3 mb-4 border-bottom bg-white p-3 rounded shadow-sm">
            <h3 class="fw-bold mb-0">Dashboard</h3>
            <span class="text-muted fw-semibold">Hello, Administrator</span>
        </div>
        @yield('content')
    </div>
    @stack('Scripts')
</body>
</html>