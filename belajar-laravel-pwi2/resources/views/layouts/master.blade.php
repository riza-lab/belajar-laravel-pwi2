<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Belajar Laravel 12</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.navbar')

    <div class="container">
        @yield('content')
    </div>

    <footer class="fixed-bottom text-center py-2 small" style="background-color: cyan;">
        Copyright S1TRM
    </footer>
    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
