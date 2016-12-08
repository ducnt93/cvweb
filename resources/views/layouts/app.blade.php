<!DOCTYPE HTML>
<html>
@include('layouts.partial.header')
<body>
@include('layouts.partial.menu')
@include('layouts.partial.slidebar')
@yield('container')
@include('layouts.partial.footer')
</body>
</html>
@yield('script')