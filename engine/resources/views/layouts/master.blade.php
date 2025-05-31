<!DOCTYPE html>
<html lang=en>
<head>
    <title>@yield('title')</title>
    @stack('additional-css')
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>

    @include ('partials.footer')
    @stack('additional-js')
</body>
</html>