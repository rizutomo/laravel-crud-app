<!DOCTYPE html>
<html lang=en>
<head>
    <title>@yield('title')</title>
    @stack('additional-css')
    @stack('additional-js')
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    
    <div class="wrapper">
        @yield('preloader')
        @include('goodapp.navbar')
        @include('goodapp.sidebar')
        @yield('konten')
        @include ('goodapp.footer')
    </div>


    
</body>
</html>