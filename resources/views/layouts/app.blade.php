<!DOCTYPE HTML>
<html>
@include('layouts.partial.header')
<body>
@include('layouts.partial.menu')
@include('layouts.partial.slidebar')
@yield('contents')
@include('layouts.partial.footer')
</body>
</html>