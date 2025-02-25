<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Bookstore Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        @include('layouts.navbar')

        <!-- Sidebar -->
        @include('layouts.sidebar')

        <!-- Main Content -->
        <div class="content-wrapper">
            <section class="content">
                <div class="container-fluid py-4">
                    @yield('content')
                </div>
            </section>
        </div>

        <!-- Footer -->
        @include('layouts.footer')
    </div>

    <!-- AdminLTE Scripts -->
    {{-- <script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script> --}}
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <!-- Bootstrap (Required for AdminLTE) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AdminLTE Scripts -->
    <script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>
</body>

</html>