<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @include('layout.bootstrap')
</head>
<body>
<div class="d-flex flex-column min-vh-100" style="background-color: #EDE8D0;">
    @include('layout.header')
    <div class="flex-grow-1 container-fluid px-0">
        @yield('konten')
    </div>
    @include('layout.footer')
</div>
</body>
</html>
