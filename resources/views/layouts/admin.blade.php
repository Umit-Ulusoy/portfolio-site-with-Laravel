<!DOCTYPE html>
<html lang="trtr-TR">
<head>
    @include('includes.admin.head')
</head>
<body>

    <header>
        @include('includes.admin.header')
    </header>

    <div id="content">
        @yield('content')
</div>

    <footer>
        @include('includes.admin.footer')
</footer>

</body>
</html>