<!DOCTYPE html>
<html lang="trtr-TR">
<head>
    @include('includes.head')
</head>
<body>

    <header>
        @include('includes.header')
    </header>

    <div id="content">
        @yield('content')
</div>

    <footer>
        @include('includes.footer')
</footer>

</body>
</html>