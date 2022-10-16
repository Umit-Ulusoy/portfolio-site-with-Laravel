<!DOCTYPE html>
<html lang="trtr-TR">
<head>
    @include('includes.user.head')
</head>
<body>

    <header>
        @include('includes.user.header')
    </header>

    <div id="content">
        @yield('content')
</div>

    <footer>
        @include('includes.user.footer')
</footer>

</body>
</html>