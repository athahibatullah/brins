<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Laravel App')</title>
</head>
<body>
    <header>
        <h1>Laravel App</h1>
    </header>

    <div class="content">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} My Laravel App
    </footer>
</body>
</html>
